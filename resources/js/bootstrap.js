import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

const isHttps = (typeof window !== 'undefined' && window.location.protocol === 'https:');
const currentHost = (typeof window !== 'undefined') ? window.location.hostname : 'localhost';

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY ?? 'a42d53009b7b282bc22d',       // valor seguro por defecto
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER ?? 'us2',    // cluster por defecto (inofensivo)
    wsHost: currentHost,
    wsPort: 80,
    wssPort: 443,
    forceTLS: isHttps,   // true en producción (HTTPS), false en local
    enabledTransports: ['ws', 'wss'],
    disableStats: true,
});

console.log(`🔌 Echo → ${isHttps ? 'wss' : 'ws'}://${currentHost}:${isHttps ? 443 : 80} (key: ${window.Echo.options.key})`);
