import React, { useEffect } from 'react';
import { createRoot } from 'react-dom/client';
import { createChat } from '@n8n/chat';
import { v4 as uuidv4 } from 'uuid';

let chatSettings = null;
let apiStatus = null;

const App = ({settings, pluginSlug}) => {
    useEffect(() => {
        createChat({
            webhookUrl: settings.webhook_url,
            mode: 'window',
            enableStreaming: false,
            chatSessionKey: 'sessionIdn8n',
            loadPreviousSession: true,
            showWelcomeScreen: true,
            defaultLanguage: 'en',
            initialMessages: settings.initial_messages,
            i18n: {
                en: {
                    title: settings.title,
                    subtitle: settings.subtitle,
                    footer: settings.footer,
                    getStarted: settings.get_started,
                    inputPlaceholder: settings.input_placeholder,
                },
            },
			metadata: {sessionId: getChatSessionId(pluginSlug), ...settings.metadata},
        });
    }, []);

    return null;
};

function mountDocsChat(container, pluginSlug = 'octolize-docs') {
	const root = createRoot(container);
	root.render(<App settings={chatSettings} pluginSlug={pluginSlug}/>);
}


function fetchSettings(container) {
	const ajax_url = container.getAttribute('data-ajax_url');
	const ajax_action = container.getAttribute('data-ajax_action');
	const nonce = container.getAttribute('data-nonce');
	const instance_id = container.getAttribute('data-instance_id');
	const pluginSlug = container.getAttribute('data-plugin_slug');
	fetch(ajax_url, {
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
		},
		body: new URLSearchParams({
			action: ajax_action,
			nonce: nonce,
			instance_id: instance_id
		}),
		credentials: 'same-origin'
	}).then((response) => response.json()).then((data) => {
		chatSettings = data?.data?.settings ?? null;
		if ( !chatSettings ) return;
		chatSettings.metadata = chatSettings.metadata ?? {};
		changeApiStatusInSettings();
		mountDocsChat(container,pluginSlug);
	})
}

function getChatSessionId(pluginSlug) {
	const key = `octolize-docs-chat-${pluginSlug}`;
	let sessionId = localStorage.getItem(key);
	if (!sessionId) {
		sessionId = uuidv4();
		localStorage.setItem(key, sessionId);
	}

	return sessionId;
}

function changeApiStatusInSettings() {
	if ( !chatSettings ) return;
	if ( !apiStatus ) return;

	chatSettings.metadata.plugin_settings.api_status = apiStatus;
}

document.addEventListener('wpdesk_wc_shipping_api_status', (e) => {
	apiStatus = e.detail.status;
	changeApiStatusInSettings();
});

document.addEventListener('DOMContentLoaded', () => {
	const container = document.getElementById('octolize-docs-chat');
	if ( !container ) return;

	fetchSettings(container);
});
