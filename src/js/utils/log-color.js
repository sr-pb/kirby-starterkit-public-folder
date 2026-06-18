/**
 * Console log styles, organised by colour.
 *
 * Usage:
 *   console.log('%c🔔 saved', LogColor.green, detail);
 *   console.log('%c✗ failed', LogColor.redText, error);
 */

const BADGE_BASE = 'font-family: monospace; padding: 4px 6px 3px; border-radius: 4px;';
const TEXT_BASE  = 'font-family: monospace; font-weight: bold;';

const palette = {
    red:     { bg: '#ffcccc', fg: '#b00020', text: '#e53935' },
    orange:  { bg: '#ffc24a', fg: '#7a3e00', text: '#ff7800' },
    yellow:  { bg: '#ffee00', fg: '#5c5400', text: '#8a7a00' },
    green:   { bg: '#c0f8b3', fg: '#0c3d00', text: '#186c03' },
    mint:    { bg: '#c6ffdb', fg: '#0a3d22', text: '#0e7a45' },
    teal:    { bg: '#9ff0e0', fg: '#0a4a40', text: '#0a8a78' },
    cyan:    { bg: '#aef4ff', fg: '#003c44', text: '#0097ad' },
    blue:    { bg: '#00d2ff', fg: '#003a52', text: '#0066ff' },
    indigo:  { bg: '#cdd9ff', fg: '#1a2a66', text: '#3a4fd6' },
    purple:  { bg: '#e7c9ff', fg: '#3d0a5c', text: '#9932cc' },
    magenta: { bg: '#ff8afc', fg: '#5c0058', text: '#d6189f' },
    rose:    { bg: '#ffbcbc', fg: '#5c1a1a', text: '#e0506a' },
    antique: { bg: '#ffdcae', fg: '#4a2e00', text: '#a35c10' },
    gray:    { bg: '#d9d9d9', fg: '#2c2c2a', text: '#5f5e5a' },
    dark:    { bg: '#2c2c2a', fg: '#f1f1f1', text: '#2c2c2a' },
};

const LogColor = {};

for (const [name, { bg, fg, text }] of Object.entries(palette)) {
    LogColor[name] = `${BADGE_BASE} background: ${bg}; color: ${fg};`;
    LogColor[`${name}Text`] = `${TEXT_BASE} color: ${text};`;
}

export default LogColor;
