!function(){"use strict";var e=window.wc.blocksCheckout,t=window.React;function n(e){return n="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e},n(e)}function r(e,t){(null==t||t>e.length)&&(t=e.length);for(var n=0,r=new Array(t);n<t;n++)r[n]=e[n];return r}function o(e,t){if(e){if("string"==typeof e)return r(e,t);var n=Object.prototype.toString.call(e).slice(8,-1);return"Object"===n&&e.constructor&&(n=e.constructor.name),"Map"===n||"Set"===n?Array.from(e):"Arguments"===n||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)?r(e,t):void 0}}function i(e){return function(e){if(Array.isArray(e))return r(e)}(e)||function(e){if("undefined"!=typeof Symbol&&null!=e[Symbol.iterator]||null!=e["@@iterator"])return Array.from(e)}(e)||o(e)||function(){throw new TypeError("Invalid attempt to spread non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}function s(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var n=null==e?null:"undefined"!=typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=n){var r,o,i,s,a=[],c=!0,l=!1;try{if(i=(n=n.call(e)).next,0===t){if(Object(n)!==n)return;c=!1}else for(;!(c=(r=i.call(n)).done)&&(a.push(r.value),a.length!==t);c=!0);}catch(e){l=!0,o=e}finally{try{if(!c&&null!=n.return&&(s=n.return(),Object(s)!==s))return}finally{if(l)throw o}}return a}}(e,t)||o(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var a=window.wp.element,c=window.wp.components,l=window.wp.i18n,u=window.wp.data,f=window.lodash,d=[{label:(0,l.__)("Please enter at least 3 characters","flexible-shipping-ups"),value:""}];function p(e,t){return function(){return e.apply(t,arguments)}}const{toString:h}=Object.prototype,{getPrototypeOf:m}=Object,b=(y=Object.create(null),e=>{const t=h.call(e);return y[t]||(y[t]=t.slice(8,-1).toLowerCase())});var y;const g=e=>(e=e.toLowerCase(),t=>b(t)===e),w=e=>t=>typeof t===e,{isArray:E}=Array,S=w("undefined"),v=g("ArrayBuffer"),O=w("string"),R=w("function"),A=w("number"),x=e=>null!==e&&"object"==typeof e,T=e=>{if("object"!==b(e))return!1;const t=m(e);return!(null!==t&&t!==Object.prototype&&null!==Object.getPrototypeOf(t)||Symbol.toStringTag in e||Symbol.iterator in e)},j=g("Date"),C=g("File"),N=g("Blob"),_=g("FileList"),P=g("URLSearchParams");function k(e,t,{allOwnKeys:n=!1}={}){if(null==e)return;let r,o;if("object"!=typeof e&&(e=[e]),E(e))for(r=0,o=e.length;r<o;r++)t.call(null,e[r],r,e);else{const o=n?Object.getOwnPropertyNames(e):Object.keys(e),i=o.length;let s;for(r=0;r<i;r++)s=o[r],t.call(null,e[s],s,e)}}function D(e,t){t=t.toLowerCase();const n=Object.keys(e);let r,o=n.length;for(;o-- >0;)if(r=n[o],t===r.toLowerCase())return r;return null}const F="undefined"!=typeof globalThis?globalThis:"undefined"!=typeof self?self:"undefined"!=typeof window?window:global,U=e=>!S(e)&&e!==F,B=(L="undefined"!=typeof Uint8Array&&m(Uint8Array),e=>L&&e instanceof L);var L;const I=g("HTMLFormElement"),q=(({hasOwnProperty:e})=>(t,n)=>e.call(t,n))(Object.prototype),M=g("RegExp"),z=(e,t)=>{const n=Object.getOwnPropertyDescriptors(e),r={};k(n,((n,o)=>{let i;!1!==(i=t(n,o,e))&&(r[o]=i||n)})),Object.defineProperties(e,r)},H="abcdefghijklmnopqrstuvwxyz",V="0123456789",J={DIGIT:V,ALPHA:H,ALPHA_DIGIT:H+H.toUpperCase()+V},K=g("AsyncFunction");var W={isArray:E,isArrayBuffer:v,isBuffer:function(e){return null!==e&&!S(e)&&null!==e.constructor&&!S(e.constructor)&&R(e.constructor.isBuffer)&&e.constructor.isBuffer(e)},isFormData:e=>{let t;return e&&("function"==typeof FormData&&e instanceof FormData||R(e.append)&&("formdata"===(t=b(e))||"object"===t&&R(e.toString)&&"[object FormData]"===e.toString()))},isArrayBufferView:function(e){let t;return t="undefined"!=typeof ArrayBuffer&&ArrayBuffer.isView?ArrayBuffer.isView(e):e&&e.buffer&&v(e.buffer),t},isString:O,isNumber:A,isBoolean:e=>!0===e||!1===e,isObject:x,isPlainObject:T,isUndefined:S,isDate:j,isFile:C,isBlob:N,isRegExp:M,isFunction:R,isStream:e=>x(e)&&R(e.pipe),isURLSearchParams:P,isTypedArray:B,isFileList:_,forEach:k,merge:function e(){const{caseless:t}=U(this)&&this||{},n={},r=(r,o)=>{const i=t&&D(n,o)||o;T(n[i])&&T(r)?n[i]=e(n[i],r):T(r)?n[i]=e({},r):E(r)?n[i]=r.slice():n[i]=r};for(let e=0,t=arguments.length;e<t;e++)arguments[e]&&k(arguments[e],r);return n},extend:(e,t,n,{allOwnKeys:r}={})=>(k(t,((t,r)=>{n&&R(t)?e[r]=p(t,n):e[r]=t}),{allOwnKeys:r}),e),trim:e=>e.trim?e.trim():e.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,""),stripBOM:e=>(65279===e.charCodeAt(0)&&(e=e.slice(1)),e),inherits:(e,t,n,r)=>{e.prototype=Object.create(t.prototype,r),e.prototype.constructor=e,Object.defineProperty(e,"super",{value:t.prototype}),n&&Object.assign(e.prototype,n)},toFlatObject:(e,t,n,r)=>{let o,i,s;const a={};if(t=t||{},null==e)return t;do{for(o=Object.getOwnPropertyNames(e),i=o.length;i-- >0;)s=o[i],r&&!r(s,e,t)||a[s]||(t[s]=e[s],a[s]=!0);e=!1!==n&&m(e)}while(e&&(!n||n(e,t))&&e!==Object.prototype);return t},kindOf:b,kindOfTest:g,endsWith:(e,t,n)=>{e=String(e),(void 0===n||n>e.length)&&(n=e.length),n-=t.length;const r=e.indexOf(t,n);return-1!==r&&r===n},toArray:e=>{if(!e)return null;if(E(e))return e;let t=e.length;if(!A(t))return null;const n=new Array(t);for(;t-- >0;)n[t]=e[t];return n},forEachEntry:(e,t)=>{const n=(e&&e[Symbol.iterator]).call(e);let r;for(;(r=n.next())&&!r.done;){const n=r.value;t.call(e,n[0],n[1])}},matchAll:(e,t)=>{let n;const r=[];for(;null!==(n=e.exec(t));)r.push(n);return r},isHTMLForm:I,hasOwnProperty:q,hasOwnProp:q,reduceDescriptors:z,freezeMethods:e=>{z(e,((t,n)=>{if(R(e)&&-1!==["arguments","caller","callee"].indexOf(n))return!1;const r=e[n];R(r)&&(t.enumerable=!1,"writable"in t?t.writable=!1:t.set||(t.set=()=>{throw Error("Can not rewrite read-only method '"+n+"'")}))}))},toObjectSet:(e,t)=>{const n={},r=e=>{e.forEach((e=>{n[e]=!0}))};return E(e)?r(e):r(String(e).split(t)),n},toCamelCase:e=>e.toLowerCase().replace(/[-_\s]([a-z\d])(\w*)/g,(function(e,t,n){return t.toUpperCase()+n})),noop:()=>{},toFiniteNumber:(e,t)=>(e=+e,Number.isFinite(e)?e:t),findKey:D,global:F,isContextDefined:U,ALPHABET:J,generateString:(e=16,t=J.ALPHA_DIGIT)=>{let n="";const{length:r}=t;for(;e--;)n+=t[Math.random()*r|0];return n},isSpecCompliantForm:function(e){return!!(e&&R(e.append)&&"FormData"===e[Symbol.toStringTag]&&e[Symbol.iterator])},toJSONObject:e=>{const t=new Array(10),n=(e,r)=>{if(x(e)){if(t.indexOf(e)>=0)return;if(!("toJSON"in e)){t[r]=e;const o=E(e)?[]:{};return k(e,((e,t)=>{const i=n(e,r+1);!S(i)&&(o[t]=i)})),t[r]=void 0,o}}return e};return n(e,0)},isAsyncFn:K,isThenable:e=>e&&(x(e)||R(e))&&R(e.then)&&R(e.catch)};function $(e,t,n,r,o){Error.call(this),Error.captureStackTrace?Error.captureStackTrace(this,this.constructor):this.stack=(new Error).stack,this.message=e,this.name="AxiosError",t&&(this.code=t),n&&(this.config=n),r&&(this.request=r),o&&(this.response=o)}W.inherits($,Error,{toJSON:function(){return{message:this.message,name:this.name,description:this.description,number:this.number,fileName:this.fileName,lineNumber:this.lineNumber,columnNumber:this.columnNumber,stack:this.stack,config:W.toJSONObject(this.config),code:this.code,status:this.response&&this.response.status?this.response.status:null}}});const G=$.prototype,X={};["ERR_BAD_OPTION_VALUE","ERR_BAD_OPTION","ECONNABORTED","ETIMEDOUT","ERR_NETWORK","ERR_FR_TOO_MANY_REDIRECTS","ERR_DEPRECATED","ERR_BAD_RESPONSE","ERR_BAD_REQUEST","ERR_CANCELED","ERR_NOT_SUPPORT","ERR_INVALID_URL"].forEach((e=>{X[e]={value:e}})),Object.defineProperties($,X),Object.defineProperty(G,"isAxiosError",{value:!0}),$.from=(e,t,n,r,o,i)=>{const s=Object.create(G);return W.toFlatObject(e,s,(function(e){return e!==Error.prototype}),(e=>"isAxiosError"!==e)),$.call(s,e.message,t,n,r,o),s.cause=e,s.name=e.name,i&&Object.assign(s,i),s};var Q=$;function Z(e){return W.isPlainObject(e)||W.isArray(e)}function Y(e){return W.endsWith(e,"[]")?e.slice(0,-2):e}function ee(e,t,n){return e?e.concat(t).map((function(e,t){return e=Y(e),!n&&t?"["+e+"]":e})).join(n?".":""):t}const te=W.toFlatObject(W,{},null,(function(e){return/^is[A-Z]/.test(e)}));var ne=function(e,t,n){if(!W.isObject(e))throw new TypeError("target must be an object");t=t||new FormData;const r=(n=W.toFlatObject(n,{metaTokens:!0,dots:!1,indexes:!1},!1,(function(e,t){return!W.isUndefined(t[e])}))).metaTokens,o=n.visitor||l,i=n.dots,s=n.indexes,a=(n.Blob||"undefined"!=typeof Blob&&Blob)&&W.isSpecCompliantForm(t);if(!W.isFunction(o))throw new TypeError("visitor must be a function");function c(e){if(null===e)return"";if(W.isDate(e))return e.toISOString();if(!a&&W.isBlob(e))throw new Q("Blob is not supported. Use a Buffer instead.");return W.isArrayBuffer(e)||W.isTypedArray(e)?a&&"function"==typeof Blob?new Blob([e]):Buffer.from(e):e}function l(e,n,o){let a=e;if(e&&!o&&"object"==typeof e)if(W.endsWith(n,"{}"))n=r?n:n.slice(0,-2),e=JSON.stringify(e);else if(W.isArray(e)&&function(e){return W.isArray(e)&&!e.some(Z)}(e)||(W.isFileList(e)||W.endsWith(n,"[]"))&&(a=W.toArray(e)))return n=Y(n),a.forEach((function(e,r){!W.isUndefined(e)&&null!==e&&t.append(!0===s?ee([n],r,i):null===s?n:n+"[]",c(e))})),!1;return!!Z(e)||(t.append(ee(o,n,i),c(e)),!1)}const u=[],f=Object.assign(te,{defaultVisitor:l,convertValue:c,isVisitable:Z});if(!W.isObject(e))throw new TypeError("data must be an object");return function e(n,r){if(!W.isUndefined(n)){if(-1!==u.indexOf(n))throw Error("Circular reference detected in "+r.join("."));u.push(n),W.forEach(n,(function(n,i){!0===(!(W.isUndefined(n)||null===n)&&o.call(t,n,W.isString(i)?i.trim():i,r,f))&&e(n,r?r.concat(i):[i])})),u.pop()}}(e),t};function re(e){const t={"!":"%21","'":"%27","(":"%28",")":"%29","~":"%7E","%20":"+","%00":"\0"};return encodeURIComponent(e).replace(/[!'()~]|%20|%00/g,(function(e){return t[e]}))}function oe(e,t){this._pairs=[],e&&ne(e,this,t)}const ie=oe.prototype;ie.append=function(e,t){this._pairs.push([e,t])},ie.toString=function(e){const t=e?function(t){return e.call(this,t,re)}:re;return this._pairs.map((function(e){return t(e[0])+"="+t(e[1])}),"").join("&")};var se=oe;function ae(e){return encodeURIComponent(e).replace(/%3A/gi,":").replace(/%24/g,"$").replace(/%2C/gi,",").replace(/%20/g,"+").replace(/%5B/gi,"[").replace(/%5D/gi,"]")}function ce(e,t,n){if(!t)return e;const r=n&&n.encode||ae,o=n&&n.serialize;let i;if(i=o?o(t,n):W.isURLSearchParams(t)?t.toString():new se(t,n).toString(r),i){const t=e.indexOf("#");-1!==t&&(e=e.slice(0,t)),e+=(-1===e.indexOf("?")?"?":"&")+i}return e}var le=class{constructor(){this.handlers=[]}use(e,t,n){return this.handlers.push({fulfilled:e,rejected:t,synchronous:!!n&&n.synchronous,runWhen:n?n.runWhen:null}),this.handlers.length-1}eject(e){this.handlers[e]&&(this.handlers[e]=null)}clear(){this.handlers&&(this.handlers=[])}forEach(e){W.forEach(this.handlers,(function(t){null!==t&&e(t)}))}},ue={silentJSONParsing:!0,forcedJSONParsing:!0,clarifyTimeoutError:!1},fe={isBrowser:!0,classes:{URLSearchParams:"undefined"!=typeof URLSearchParams?URLSearchParams:se,FormData:"undefined"!=typeof FormData?FormData:null,Blob:"undefined"!=typeof Blob?Blob:null},isStandardBrowserEnv:(()=>{let e;return("undefined"==typeof navigator||"ReactNative"!==(e=navigator.product)&&"NativeScript"!==e&&"NS"!==e)&&"undefined"!=typeof window&&"undefined"!=typeof document})(),isStandardBrowserWebWorkerEnv:"undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope&&"function"==typeof self.importScripts,protocols:["http","https","file","blob","url","data"]},de=function(e){function t(e,n,r,o){let i=e[o++];const s=Number.isFinite(+i),a=o>=e.length;return i=!i&&W.isArray(r)?r.length:i,a?(W.hasOwnProp(r,i)?r[i]=[r[i],n]:r[i]=n,!s):(r[i]&&W.isObject(r[i])||(r[i]=[]),t(e,n,r[i],o)&&W.isArray(r[i])&&(r[i]=function(e){const t={},n=Object.keys(e);let r;const o=n.length;let i;for(r=0;r<o;r++)i=n[r],t[i]=e[i];return t}(r[i])),!s)}if(W.isFormData(e)&&W.isFunction(e.entries)){const n={};return W.forEachEntry(e,((e,r)=>{t(function(e){return W.matchAll(/\w+|\[(\w*)]/g,e).map((e=>"[]"===e[0]?"":e[1]||e[0]))}(e),r,n,0)})),n}return null};const pe={transitional:ue,adapter:["xhr","http"],transformRequest:[function(e,t){const n=t.getContentType()||"",r=n.indexOf("application/json")>-1,o=W.isObject(e);if(o&&W.isHTMLForm(e)&&(e=new FormData(e)),W.isFormData(e))return r&&r?JSON.stringify(de(e)):e;if(W.isArrayBuffer(e)||W.isBuffer(e)||W.isStream(e)||W.isFile(e)||W.isBlob(e))return e;if(W.isArrayBufferView(e))return e.buffer;if(W.isURLSearchParams(e))return t.setContentType("application/x-www-form-urlencoded;charset=utf-8",!1),e.toString();let i;if(o){if(n.indexOf("application/x-www-form-urlencoded")>-1)return function(e,t){return ne(e,new fe.classes.URLSearchParams,Object.assign({visitor:function(e,t,n,r){return fe.isNode&&W.isBuffer(e)?(this.append(t,e.toString("base64")),!1):r.defaultVisitor.apply(this,arguments)}},t))}(e,this.formSerializer).toString();if((i=W.isFileList(e))||n.indexOf("multipart/form-data")>-1){const t=this.env&&this.env.FormData;return ne(i?{"files[]":e}:e,t&&new t,this.formSerializer)}}return o||r?(t.setContentType("application/json",!1),function(e,t,n){if(W.isString(e))try{return(0,JSON.parse)(e),W.trim(e)}catch(e){if("SyntaxError"!==e.name)throw e}return(0,JSON.stringify)(e)}(e)):e}],transformResponse:[function(e){const t=this.transitional||pe.transitional,n=t&&t.forcedJSONParsing,r="json"===this.responseType;if(e&&W.isString(e)&&(n&&!this.responseType||r)){const n=!(t&&t.silentJSONParsing)&&r;try{return JSON.parse(e)}catch(e){if(n){if("SyntaxError"===e.name)throw Q.from(e,Q.ERR_BAD_RESPONSE,this,null,this.response);throw e}}}return e}],timeout:0,xsrfCookieName:"XSRF-TOKEN",xsrfHeaderName:"X-XSRF-TOKEN",maxContentLength:-1,maxBodyLength:-1,env:{FormData:fe.classes.FormData,Blob:fe.classes.Blob},validateStatus:function(e){return e>=200&&e<300},headers:{common:{Accept:"application/json, text/plain, */*","Content-Type":void 0}}};W.forEach(["delete","get","head","post","put","patch"],(e=>{pe.headers[e]={}}));var he=pe;const me=W.toObjectSet(["age","authorization","content-length","content-type","etag","expires","from","host","if-modified-since","if-unmodified-since","last-modified","location","max-forwards","proxy-authorization","referer","retry-after","user-agent"]),be=Symbol("internals");function ye(e){return e&&String(e).trim().toLowerCase()}function ge(e){return!1===e||null==e?e:W.isArray(e)?e.map(ge):String(e)}function we(e,t,n,r,o){return W.isFunction(r)?r.call(this,t,n):(o&&(t=n),W.isString(t)?W.isString(r)?-1!==t.indexOf(r):W.isRegExp(r)?r.test(t):void 0:void 0)}class Ee{constructor(e){e&&this.set(e)}set(e,t,n){const r=this;function o(e,t,n){const o=ye(t);if(!o)throw new Error("header name must be a non-empty string");const i=W.findKey(r,o);(!i||void 0===r[i]||!0===n||void 0===n&&!1!==r[i])&&(r[i||t]=ge(e))}const i=(e,t)=>W.forEach(e,((e,n)=>o(e,n,t)));return W.isPlainObject(e)||e instanceof this.constructor?i(e,t):W.isString(e)&&(e=e.trim())&&!/^[-_a-zA-Z0-9^`|~,!#$%&'*+.]+$/.test(e.trim())?i((e=>{const t={};let n,r,o;return e&&e.split("\n").forEach((function(e){o=e.indexOf(":"),n=e.substring(0,o).trim().toLowerCase(),r=e.substring(o+1).trim(),!n||t[n]&&me[n]||("set-cookie"===n?t[n]?t[n].push(r):t[n]=[r]:t[n]=t[n]?t[n]+", "+r:r)})),t})(e),t):null!=e&&o(t,e,n),this}get(e,t){if(e=ye(e)){const n=W.findKey(this,e);if(n){const e=this[n];if(!t)return e;if(!0===t)return function(e){const t=Object.create(null),n=/([^\s,;=]+)\s*(?:=\s*([^,;]+))?/g;let r;for(;r=n.exec(e);)t[r[1]]=r[2];return t}(e);if(W.isFunction(t))return t.call(this,e,n);if(W.isRegExp(t))return t.exec(e);throw new TypeError("parser must be boolean|regexp|function")}}}has(e,t){if(e=ye(e)){const n=W.findKey(this,e);return!(!n||void 0===this[n]||t&&!we(0,this[n],n,t))}return!1}delete(e,t){const n=this;let r=!1;function o(e){if(e=ye(e)){const o=W.findKey(n,e);!o||t&&!we(0,n[o],o,t)||(delete n[o],r=!0)}}return W.isArray(e)?e.forEach(o):o(e),r}clear(e){const t=Object.keys(this);let n=t.length,r=!1;for(;n--;){const o=t[n];e&&!we(0,this[o],o,e,!0)||(delete this[o],r=!0)}return r}normalize(e){const t=this,n={};return W.forEach(this,((r,o)=>{const i=W.findKey(n,o);if(i)return t[i]=ge(r),void delete t[o];const s=e?function(e){return e.trim().toLowerCase().replace(/([a-z\d])(\w*)/g,((e,t,n)=>t.toUpperCase()+n))}(o):String(o).trim();s!==o&&delete t[o],t[s]=ge(r),n[s]=!0})),this}concat(...e){return this.constructor.concat(this,...e)}toJSON(e){const t=Object.create(null);return W.forEach(this,((n,r)=>{null!=n&&!1!==n&&(t[r]=e&&W.isArray(n)?n.join(", "):n)})),t}[Symbol.iterator](){return Object.entries(this.toJSON())[Symbol.iterator]()}toString(){return Object.entries(this.toJSON()).map((([e,t])=>e+": "+t)).join("\n")}get[Symbol.toStringTag](){return"AxiosHeaders"}static from(e){return e instanceof this?e:new this(e)}static concat(e,...t){const n=new this(e);return t.forEach((e=>n.set(e))),n}static accessor(e){const t=(this[be]=this[be]={accessors:{}}).accessors,n=this.prototype;function r(e){const r=ye(e);t[r]||(function(e,t){const n=W.toCamelCase(" "+t);["get","set","has"].forEach((r=>{Object.defineProperty(e,r+n,{value:function(e,n,o){return this[r].call(this,t,e,n,o)},configurable:!0})}))}(n,e),t[r]=!0)}return W.isArray(e)?e.forEach(r):r(e),this}}Ee.accessor(["Content-Type","Content-Length","Accept","Accept-Encoding","User-Agent","Authorization"]),W.reduceDescriptors(Ee.prototype,(({value:e},t)=>{let n=t[0].toUpperCase()+t.slice(1);return{get:()=>e,set(e){this[n]=e}}})),W.freezeMethods(Ee);var Se=Ee;function ve(e,t){const n=this||he,r=t||n,o=Se.from(r.headers);let i=r.data;return W.forEach(e,(function(e){i=e.call(n,i,o.normalize(),t?t.status:void 0)})),o.normalize(),i}function Oe(e){return!(!e||!e.__CANCEL__)}function Re(e,t,n){Q.call(this,null==e?"canceled":e,Q.ERR_CANCELED,t,n),this.name="CanceledError"}W.inherits(Re,Q,{__CANCEL__:!0});var Ae=Re,xe=fe.isStandardBrowserEnv?{write:function(e,t,n,r,o,i){const s=[];s.push(e+"="+encodeURIComponent(t)),W.isNumber(n)&&s.push("expires="+new Date(n).toGMTString()),W.isString(r)&&s.push("path="+r),W.isString(o)&&s.push("domain="+o),!0===i&&s.push("secure"),document.cookie=s.join("; ")},read:function(e){const t=document.cookie.match(new RegExp("(^|;\\s*)("+e+")=([^;]*)"));return t?decodeURIComponent(t[3]):null},remove:function(e){this.write(e,"",Date.now()-864e5)}}:{write:function(){},read:function(){return null},remove:function(){}};function Te(e,t){return e&&!/^([a-z][a-z\d+\-.]*:)?\/\//i.test(t)?function(e,t){return t?e.replace(/\/+$/,"")+"/"+t.replace(/^\/+/,""):e}(e,t):t}var je=fe.isStandardBrowserEnv?function(){const e=/(msie|trident)/i.test(navigator.userAgent),t=document.createElement("a");let n;function r(n){let r=n;return e&&(t.setAttribute("href",r),r=t.href),t.setAttribute("href",r),{href:t.href,protocol:t.protocol?t.protocol.replace(/:$/,""):"",host:t.host,search:t.search?t.search.replace(/^\?/,""):"",hash:t.hash?t.hash.replace(/^#/,""):"",hostname:t.hostname,port:t.port,pathname:"/"===t.pathname.charAt(0)?t.pathname:"/"+t.pathname}}return n=r(window.location.href),function(e){const t=W.isString(e)?r(e):e;return t.protocol===n.protocol&&t.host===n.host}}():function(){return!0};function Ce(e,t){let n=0;const r=function(e,t){e=e||10;const n=new Array(e),r=new Array(e);let o,i=0,s=0;return t=void 0!==t?t:1e3,function(a){const c=Date.now(),l=r[s];o||(o=c),n[i]=a,r[i]=c;let u=s,f=0;for(;u!==i;)f+=n[u++],u%=e;if(i=(i+1)%e,i===s&&(s=(s+1)%e),c-o<t)return;const d=l&&c-l;return d?Math.round(1e3*f/d):void 0}}(50,250);return o=>{const i=o.loaded,s=o.lengthComputable?o.total:void 0,a=i-n,c=r(a);n=i;const l={loaded:i,total:s,progress:s?i/s:void 0,bytes:a,rate:c||void 0,estimated:c&&s&&i<=s?(s-i)/c:void 0,event:o};l[t?"download":"upload"]=!0,e(l)}}const Ne={http:null,xhr:"undefined"!=typeof XMLHttpRequest&&function(e){return new Promise((function(t,n){let r=e.data;const o=Se.from(e.headers).normalize(),i=e.responseType;let s,a;function c(){e.cancelToken&&e.cancelToken.unsubscribe(s),e.signal&&e.signal.removeEventListener("abort",s)}W.isFormData(r)&&(fe.isStandardBrowserEnv||fe.isStandardBrowserWebWorkerEnv?o.setContentType(!1):o.getContentType(/^\s*multipart\/form-data/)?W.isString(a=o.getContentType())&&o.setContentType(a.replace(/^\s*(multipart\/form-data);+/,"$1")):o.setContentType("multipart/form-data"));let l=new XMLHttpRequest;if(e.auth){const t=e.auth.username||"",n=e.auth.password?unescape(encodeURIComponent(e.auth.password)):"";o.set("Authorization","Basic "+btoa(t+":"+n))}const u=Te(e.baseURL,e.url);function f(){if(!l)return;const r=Se.from("getAllResponseHeaders"in l&&l.getAllResponseHeaders());!function(e,t,n){const r=n.config.validateStatus;n.status&&r&&!r(n.status)?t(new Q("Request failed with status code "+n.status,[Q.ERR_BAD_REQUEST,Q.ERR_BAD_RESPONSE][Math.floor(n.status/100)-4],n.config,n.request,n)):e(n)}((function(e){t(e),c()}),(function(e){n(e),c()}),{data:i&&"text"!==i&&"json"!==i?l.response:l.responseText,status:l.status,statusText:l.statusText,headers:r,config:e,request:l}),l=null}if(l.open(e.method.toUpperCase(),ce(u,e.params,e.paramsSerializer),!0),l.timeout=e.timeout,"onloadend"in l?l.onloadend=f:l.onreadystatechange=function(){l&&4===l.readyState&&(0!==l.status||l.responseURL&&0===l.responseURL.indexOf("file:"))&&setTimeout(f)},l.onabort=function(){l&&(n(new Q("Request aborted",Q.ECONNABORTED,e,l)),l=null)},l.onerror=function(){n(new Q("Network Error",Q.ERR_NETWORK,e,l)),l=null},l.ontimeout=function(){let t=e.timeout?"timeout of "+e.timeout+"ms exceeded":"timeout exceeded";const r=e.transitional||ue;e.timeoutErrorMessage&&(t=e.timeoutErrorMessage),n(new Q(t,r.clarifyTimeoutError?Q.ETIMEDOUT:Q.ECONNABORTED,e,l)),l=null},fe.isStandardBrowserEnv){const t=je(u)&&e.xsrfCookieName&&xe.read(e.xsrfCookieName);t&&o.set(e.xsrfHeaderName,t)}void 0===r&&o.setContentType(null),"setRequestHeader"in l&&W.forEach(o.toJSON(),(function(e,t){l.setRequestHeader(t,e)})),W.isUndefined(e.withCredentials)||(l.withCredentials=!!e.withCredentials),i&&"json"!==i&&(l.responseType=e.responseType),"function"==typeof e.onDownloadProgress&&l.addEventListener("progress",Ce(e.onDownloadProgress,!0)),"function"==typeof e.onUploadProgress&&l.upload&&l.upload.addEventListener("progress",Ce(e.onUploadProgress)),(e.cancelToken||e.signal)&&(s=t=>{l&&(n(!t||t.type?new Ae(null,e,l):t),l.abort(),l=null)},e.cancelToken&&e.cancelToken.subscribe(s),e.signal&&(e.signal.aborted?s():e.signal.addEventListener("abort",s)));const d=function(e){const t=/^([-+\w]{1,25})(:?\/\/|:)/.exec(e);return t&&t[1]||""}(u);d&&-1===fe.protocols.indexOf(d)?n(new Q("Unsupported protocol "+d+":",Q.ERR_BAD_REQUEST,e)):l.send(r||null)}))}};W.forEach(Ne,((e,t)=>{if(e){try{Object.defineProperty(e,"name",{value:t})}catch(e){}Object.defineProperty(e,"adapterName",{value:t})}}));const _e=e=>`- ${e}`,Pe=e=>W.isFunction(e)||null===e||!1===e;var ke=e=>{e=W.isArray(e)?e:[e];const{length:t}=e;let n,r;const o={};for(let i=0;i<t;i++){let t;if(n=e[i],r=n,!Pe(n)&&(r=Ne[(t=String(n)).toLowerCase()],void 0===r))throw new Q(`Unknown adapter '${t}'`);if(r)break;o[t||"#"+i]=r}if(!r){const e=Object.entries(o).map((([e,t])=>`adapter ${e} `+(!1===t?"is not supported by the environment":"is not available in the build")));let n=t?e.length>1?"since :\n"+e.map(_e).join("\n"):" "+_e(e[0]):"as no adapter specified";throw new Q("There is no suitable adapter to dispatch the request "+n,"ERR_NOT_SUPPORT")}return r};function De(e){if(e.cancelToken&&e.cancelToken.throwIfRequested(),e.signal&&e.signal.aborted)throw new Ae(null,e)}function Fe(e){return De(e),e.headers=Se.from(e.headers),e.data=ve.call(e,e.transformRequest),-1!==["post","put","patch"].indexOf(e.method)&&e.headers.setContentType("application/x-www-form-urlencoded",!1),ke(e.adapter||he.adapter)(e).then((function(t){return De(e),t.data=ve.call(e,e.transformResponse,t),t.headers=Se.from(t.headers),t}),(function(t){return Oe(t)||(De(e),t&&t.response&&(t.response.data=ve.call(e,e.transformResponse,t.response),t.response.headers=Se.from(t.response.headers))),Promise.reject(t)}))}const Ue=e=>e instanceof Se?e.toJSON():e;function Be(e,t){t=t||{};const n={};function r(e,t,n){return W.isPlainObject(e)&&W.isPlainObject(t)?W.merge.call({caseless:n},e,t):W.isPlainObject(t)?W.merge({},t):W.isArray(t)?t.slice():t}function o(e,t,n){return W.isUndefined(t)?W.isUndefined(e)?void 0:r(void 0,e,n):r(e,t,n)}function i(e,t){if(!W.isUndefined(t))return r(void 0,t)}function s(e,t){return W.isUndefined(t)?W.isUndefined(e)?void 0:r(void 0,e):r(void 0,t)}function a(n,o,i){return i in t?r(n,o):i in e?r(void 0,n):void 0}const c={url:i,method:i,data:i,baseURL:s,transformRequest:s,transformResponse:s,paramsSerializer:s,timeout:s,timeoutMessage:s,withCredentials:s,adapter:s,responseType:s,xsrfCookieName:s,xsrfHeaderName:s,onUploadProgress:s,onDownloadProgress:s,decompress:s,maxContentLength:s,maxBodyLength:s,beforeRedirect:s,transport:s,httpAgent:s,httpsAgent:s,cancelToken:s,socketPath:s,responseEncoding:s,validateStatus:a,headers:(e,t)=>o(Ue(e),Ue(t),!0)};return W.forEach(Object.keys(Object.assign({},e,t)),(function(r){const i=c[r]||o,s=i(e[r],t[r],r);W.isUndefined(s)&&i!==a||(n[r]=s)})),n}const Le={};["object","boolean","number","function","string","symbol"].forEach(((e,t)=>{Le[e]=function(n){return typeof n===e||"a"+(t<1?"n ":" ")+e}}));const Ie={};Le.transitional=function(e,t,n){function r(e,t){return"[Axios v1.6.0] Transitional option '"+e+"'"+t+(n?". "+n:"")}return(n,o,i)=>{if(!1===e)throw new Q(r(o," has been removed"+(t?" in "+t:"")),Q.ERR_DEPRECATED);return t&&!Ie[o]&&(Ie[o]=!0,console.warn(r(o," has been deprecated since v"+t+" and will be removed in the near future"))),!e||e(n,o,i)}};var qe={assertOptions:function(e,t,n){if("object"!=typeof e)throw new Q("options must be an object",Q.ERR_BAD_OPTION_VALUE);const r=Object.keys(e);let o=r.length;for(;o-- >0;){const i=r[o],s=t[i];if(s){const t=e[i],n=void 0===t||s(t,i,e);if(!0!==n)throw new Q("option "+i+" must be "+n,Q.ERR_BAD_OPTION_VALUE)}else if(!0!==n)throw new Q("Unknown option "+i,Q.ERR_BAD_OPTION)}},validators:Le};const Me=qe.validators;class ze{constructor(e){this.defaults=e,this.interceptors={request:new le,response:new le}}request(e,t){"string"==typeof e?(t=t||{}).url=e:t=e||{},t=Be(this.defaults,t);const{transitional:n,paramsSerializer:r,headers:o}=t;void 0!==n&&qe.assertOptions(n,{silentJSONParsing:Me.transitional(Me.boolean),forcedJSONParsing:Me.transitional(Me.boolean),clarifyTimeoutError:Me.transitional(Me.boolean)},!1),null!=r&&(W.isFunction(r)?t.paramsSerializer={serialize:r}:qe.assertOptions(r,{encode:Me.function,serialize:Me.function},!0)),t.method=(t.method||this.defaults.method||"get").toLowerCase();let i=o&&W.merge(o.common,o[t.method]);o&&W.forEach(["delete","get","head","post","put","patch","common"],(e=>{delete o[e]})),t.headers=Se.concat(i,o);const s=[];let a=!0;this.interceptors.request.forEach((function(e){"function"==typeof e.runWhen&&!1===e.runWhen(t)||(a=a&&e.synchronous,s.unshift(e.fulfilled,e.rejected))}));const c=[];let l;this.interceptors.response.forEach((function(e){c.push(e.fulfilled,e.rejected)}));let u,f=0;if(!a){const e=[Fe.bind(this),void 0];for(e.unshift.apply(e,s),e.push.apply(e,c),u=e.length,l=Promise.resolve(t);f<u;)l=l.then(e[f++],e[f++]);return l}u=s.length;let d=t;for(f=0;f<u;){const e=s[f++],t=s[f++];try{d=e(d)}catch(e){t.call(this,e);break}}try{l=Fe.call(this,d)}catch(e){return Promise.reject(e)}for(f=0,u=c.length;f<u;)l=l.then(c[f++],c[f++]);return l}getUri(e){return ce(Te((e=Be(this.defaults,e)).baseURL,e.url),e.params,e.paramsSerializer)}}W.forEach(["delete","get","head","options"],(function(e){ze.prototype[e]=function(t,n){return this.request(Be(n||{},{method:e,url:t,data:(n||{}).data}))}})),W.forEach(["post","put","patch"],(function(e){function t(t){return function(n,r,o){return this.request(Be(o||{},{method:e,headers:t?{"Content-Type":"multipart/form-data"}:{},url:n,data:r}))}}ze.prototype[e]=t(),ze.prototype[e+"Form"]=t(!0)}));var He=ze;class Ve{constructor(e){if("function"!=typeof e)throw new TypeError("executor must be a function.");let t;this.promise=new Promise((function(e){t=e}));const n=this;this.promise.then((e=>{if(!n._listeners)return;let t=n._listeners.length;for(;t-- >0;)n._listeners[t](e);n._listeners=null})),this.promise.then=e=>{let t;const r=new Promise((e=>{n.subscribe(e),t=e})).then(e);return r.cancel=function(){n.unsubscribe(t)},r},e((function(e,r,o){n.reason||(n.reason=new Ae(e,r,o),t(n.reason))}))}throwIfRequested(){if(this.reason)throw this.reason}subscribe(e){this.reason?e(this.reason):this._listeners?this._listeners.push(e):this._listeners=[e]}unsubscribe(e){if(!this._listeners)return;const t=this._listeners.indexOf(e);-1!==t&&this._listeners.splice(t,1)}static source(){let e;return{token:new Ve((function(t){e=t})),cancel:e}}}var Je=Ve;const Ke={Continue:100,SwitchingProtocols:101,Processing:102,EarlyHints:103,Ok:200,Created:201,Accepted:202,NonAuthoritativeInformation:203,NoContent:204,ResetContent:205,PartialContent:206,MultiStatus:207,AlreadyReported:208,ImUsed:226,MultipleChoices:300,MovedPermanently:301,Found:302,SeeOther:303,NotModified:304,UseProxy:305,Unused:306,TemporaryRedirect:307,PermanentRedirect:308,BadRequest:400,Unauthorized:401,PaymentRequired:402,Forbidden:403,NotFound:404,MethodNotAllowed:405,NotAcceptable:406,ProxyAuthenticationRequired:407,RequestTimeout:408,Conflict:409,Gone:410,LengthRequired:411,PreconditionFailed:412,PayloadTooLarge:413,UriTooLong:414,UnsupportedMediaType:415,RangeNotSatisfiable:416,ExpectationFailed:417,ImATeapot:418,MisdirectedRequest:421,UnprocessableEntity:422,Locked:423,FailedDependency:424,TooEarly:425,UpgradeRequired:426,PreconditionRequired:428,TooManyRequests:429,RequestHeaderFieldsTooLarge:431,UnavailableForLegalReasons:451,InternalServerError:500,NotImplemented:501,BadGateway:502,ServiceUnavailable:503,GatewayTimeout:504,HttpVersionNotSupported:505,VariantAlsoNegotiates:506,InsufficientStorage:507,LoopDetected:508,NotExtended:510,NetworkAuthenticationRequired:511};Object.entries(Ke).forEach((([e,t])=>{Ke[t]=e}));var We=Ke;const $e=function e(t){const n=new He(t),r=p(He.prototype.request,n);return W.extend(r,He.prototype,n,{allOwnKeys:!0}),W.extend(r,n,null,{allOwnKeys:!0}),r.create=function(n){return e(Be(t,n))},r}(he);$e.Axios=He,$e.CanceledError=Ae,$e.CancelToken=Je,$e.isCancel=Oe,$e.VERSION="1.6.0",$e.toFormData=ne,$e.AxiosError=Q,$e.Cancel=$e.CanceledError,$e.all=function(e){return Promise.all(e)},$e.spread=function(e){return function(t){return e.apply(null,t)}},$e.isAxiosError=function(e){return W.isObject(e)&&!0===e.isAxiosError},$e.mergeConfig=Be,$e.AxiosHeaders=Se,$e.formToJSON=e=>de(W.isHTMLForm(e)?new FormData(e):e),$e.getAdapter=ke,$e.HttpStatusCode=We,$e.default=$e;var Ge=$e,Xe=function(e){var t=e.searchString,n=e.ajaxUrl,r=e.formData,o=e.setFilteredOptions,i=e.setFilteredValue,s=e.setPointId,a=e.pointId,c=new AbortController;Ge.post(n,r,{signal:c.signal}).then((function(e){if(200===e.status){var n=e.data.items.map((function(e){return{label:e.text,value:String(e.id)}}));o(n),i(t),s&&(a&&n.filter((function(e){return e.value===a})).length>0?s(a):s(n[0].value))}else window.console.log(e.statusText)}))},Qe=function(e){var t=e.searchString,n=e.ajaxAction,r=e.nonce,o=new FormData;return o.append("action",n),o.append("security",r),o.append("city",t),o.append("s",t),o.append("search",t),o},Ze=function(e){var r,o,p,h=e.checkoutExtensionData,m=e.cart,b=e.metadata,y=e.showFieldCallback,g=e.requiredFieldCallback,w=e.formDataCallback,E=(0,a.useRef)(),S=wc.blocksCheckout.extensionCartUpdate,v=wcSettings[b.settingsKey],O=null!==(r=b.autoloadOptions)&&void 0!==r&&r,R=(h.extensionData,h.setExtensionData),A=v.integrationName+"-"+v.fieldName,x=(0,u.useDispatch)("wc/store/validation"),T=x.setValidationErrors,j=x.clearValidationError,C=(0,u.useDispatch)("wc/store/checkout"),N=C.__internalIncrementCalculating,_=C.__internalDecrementCalculating,P=s((0,a.useState)(!1),2),k=P[0],D=P[1],F=s((0,a.useState)([]),2),U=F[0],B=F[1],L=s((0,a.useState)(!1),2),I=L[0],q=L[1],M=s((0,a.useState)(null!==(o=wcSettings.checkoutData.extensions[v.integrationName][v.fieldName])&&void 0!==o?o:""),2),z=M[0],H=M[1];(0,a.useEffect)((function(){var e=function(){var e=[];return m.shippingRates.map((function(t){t.shipping_rates.filter((function(t){t.selected&&e.push(t)}))})),e}(),t=function(e){var t=[];return e.map((function(e){e.meta_data.some((function(e){return"_fs_method"===e.key&&e.value.method_integration===v.flexibleShippingIntegration&&t.push(e.value),!1}))})),t}(e);B(t),D(y(t,e)),q(g(t,e))}),i(m.shippingRates));var V=(0,u.useSelect)((function(e){return e("wc/store/validation").getValidationError(A)})),J=(0,l.__)("Select pickup point","flexible-shipping-ups");(0,a.useEffect)((function(){var e,t,r;R(v.integrationName,v.fieldName,z),k&&I&&0===z.length?T((e={},r={message:J,hidden:!1},(t=function(e){var t=function(e,t){if("object"!==n(e)||null===e)return e;var r=e[Symbol.toPrimitive];if(void 0!==r){var o=r.call(e,"string");if("object"!==n(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}return String(e)}(e);return"symbol"===n(t)?t:String(t)}(t=A))in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e)):j(A)}),[z]),(0,a.useEffect)((function(){k&&I||j(A)}),[].concat(i(m.shippingRates),[I]));var K=s((0,a.useState)(""),2),W=K[0],$=K[1],G=function(e,t,n){return{searchString:e,ajaxUrl:v.ajaxUrl,formData:w(Qe({searchString:e,ajaxAction:v.ajaxAction,nonce:v.nonce}),U,m.shippingAddress),setFilteredOptions:Z,setFilteredValue:$,setPointId:t,pointId:n}},X=s((0,a.useState)(O?[]:null!==(p=wcSettings.checkoutData.extensions[v.integrationName].default_options)&&void 0!==p?p:d),2),Q=X[0],Z=X[1],Y=(0,a.useCallback)((0,f.debounce)((function(e){Xe(e)}),500),[Xe]);return(0,a.useEffect)((function(){k&&O&&Y(G(""))}),i(m.shippingRates)),k&&O&&0===Q.length&&Y(G("",H,z)),(0,t.createElement)(t.Fragment,null,k&&(0,t.createElement)("div",{className:"wc-block-components-combobox is-active"},(0,t.createElement)(c.ComboboxControl,{className:"wc-block-components-combobox-control "+(!1===(null==V?void 0:V.hidden)?" has-error":""),label:J,value:z,required:I,options:Q,filteredValue:W,onFilterValueChange:function(e){if(e.length){var t=(0,f.isObject)(E.current)?E.current.ownerDocument.activeElement:void 0;if(t&&(0,f.isObject)(E.current)&&E.current.contains(t))return;if(!O){if(e.length<3)return void Z(d);Y(G(e))}}},onChange:function(e){H(e),R(v.integrationName,v.fieldName,e),N(),S({namespace:v.integrationName,data:{point_id:e}}).finally((function(){_()}))},allowReset:!1,"aria-invalid":(null==V?void 0:V.message)&&!(null!=V&&V.hidden)}),!1===(null==V?void 0:V.hidden)&&(0,t.createElement)("div",{className:"wc-block-components-validation-error",role:"alert",style:{"margin-top":"20px"}},(0,t.createElement)("p",{id:A},null==V?void 0:V.message))))},Ye=JSON.parse('{"apiVersion":2,"name":"flexible-shipping-ups/point-selection-block","version":"1.0.0","title":"Pickup point selection","category":"woocommerce","description":"Adds a block to select UPS pickup point","supports":{"html":false,"align":false,"multiple":false,"reusable":false},"parent":["woocommerce/checkout-shipping-methods-block"],"attributes":{"lock":{"type":"object","default":{"remove":true,"move":true}}},"settingsKey":"flexible-shipping-ups_data","textdomain":"flexible-shipping-ups","autoloadOptions":true,"editorStyle":"file:../../../../build/style-point-selection-block.css"}'),et=function(e){var t=!1;return e.meta_data.map((function(e){"collection_point"===e.key&&"yes"===e.value&&(t=!0)})),t},tt=function(e,t){var n=!1;return t.map((function(e){"flexible_shipping_ups"===e.method_id&&et(e)&&(n=!0)})),n},nt=function(e,t){var n=!1;return e.map((function(e){"flexible_shipping_ups"===rate.method_id&&et(rate)&&(n=!0)})),n},rt=function(e,t,n){return e.set("postcode",n.postcode),e.set("country",n.country),e.set("city",n.city),e.set("address",n.address_1),e.set("address_2",n.address_2),e};(0,e.registerCheckoutBlock)({metadata:Ye,component:function(e){var n=e.checkoutExtensionData,r=e.extensions,o=e.cart;return(0,t.createElement)(Ze,{checkoutExtensionData:n,extensions:r,cart:o,metadata:Ye,showFieldCallback:tt,requiredFieldCallback:nt,formDataCallback:rt})}})}();