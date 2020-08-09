import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import Wallpaper from './components/Wallpaper';
import NotFound from './components/NotFound';
import SiteStats from './components/SiteStats';
let LoadersAndAnimations = () => import(/*  webpackChunkName: "loaders" */'./components/LoadersAndAnimations');

export default {
    mode: 'history',
    linkActiveClass: 'text-red-600',

    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            component: Logo
        },
        {
            path: '/logo-symbol',
            component: LogoSymbol
        },
        {
            path: '/colors',
            component: Colors
        },
        {
            path: '/mascot',
            component: Mascot
        },
        {
            path: '/illustrations',
            component: Illustrations
        },
        {
            path: '/loaders-and-animations',
            component: LoadersAndAnimations
        },
        {
            path: '/wallpaper',
            component: Wallpaper
        },
        {
            path: '/typography',
            component: Typography
        },
        {
            path: '/site-stats',
            component: SiteStats
        }
    ]
}