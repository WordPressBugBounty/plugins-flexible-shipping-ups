import React from 'react';

export default function Top({assets_url, header_title, header_description, header_promo = []}) {
    const logoUrl = `${assets_url}img/logo-black.svg`;
    const headerImageUrl = `${assets_url}img/sp-bg-image.svg`;

    return <>
        <section className="oct-shipping-extensions-top">
            <div className="oct-shipping-extensions-top-content">
                <h1>{header_title} <img alt="Octolize" src={logoUrl}/></h1>
                <p>{header_description}</p>
                {header_promo.map(promo => {
                    const markup = { __html: promo };
                    return <p className="oct-promo" dangerouslySetInnerHTML={markup}></p>
                })}
            </div>
            <img
                className="oct-shipping-extensions-top-image"
                src={headerImageUrl}
                alt=""
                aria-hidden="true"
            />
        </section>

        <div className="oct-shipping-extensions-notice-list-hide">
            <div className="wp-header-end"></div>
        </div>
    </>;
}
