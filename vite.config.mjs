import { createViteConfig } from 'vite-config-factory'

const entries = {
    'js/acf-ux-collapse':  './source/js/FieldTypes/Repeater.ts',
    'css/acf-ux-collapse': './source/sass/acf-ux-collapse.scss',
}

export default createViteConfig(entries, {
    outDir: 'dist',
    manifestFile: 'manifest.json',
})
