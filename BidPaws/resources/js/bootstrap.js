/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */
import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

import Echo from 'laravel-echo';

import Pusher from 'pusher-js';
window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: '80a77cddf1289bda7aca',
    app_id: "1795252",
    secret: "a3e3b2a5fdfd9a62020c",
    wsHost: 'ws.pusher.com', 
    wsPort: 443,
    disableStats: true,
    logToConsole: true,
    cluster: 'mt1',
    wssPort: 443,
    forceTLS: 'https',
    enabledTransports: ['ws', 'wss'],
});






















