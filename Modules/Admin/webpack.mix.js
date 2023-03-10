let mix = require('laravel-mix');
let execSync = require('child_process').execSync;

mix.js('Modules/Admin/Resources/assets/js/app.js', 'Modules/Admin/Assets/js/admin.js')
    .sass('Modules/Admin/Resources/assets/sass/app.scss', 'Modules/Admin/Assets/css/admin.css')
    .copy('Modules/Admin/Resources/assets/js/dataTables-buttons', 'Modules/Admin/Assets/js/dataTables-buttons')
    .copy('Modules/Admin/Resources/assets/fonts', 'Modules/Admin/Assets/fonts')
    .copy('Modules/Admin/Resources/assets/images', 'Modules/Admin/Assets/images')
    .copy('Modules/Admin/node_modules/tinymce/themes', 'Modules/Admin/Assets/js/wysiwyg/themes')
    .copy('Modules/Admin/node_modules/tinymce/skins', 'Modules/Admin/Assets/js/wysiwyg/skins')
	.copy('Modules/Admin/node_modules/tinymce/icons', 'Modules/Admin/Assets/js/wysiwyg/icons');
    
let tinymcePlugins = [
    'lists',
    'link',
    'table',
    'image',
    'media',
    'paste',
    'autosave',
    'autolink',
    'wordcount',
    'code',
    'fullscreen',
];

tinymcePlugins.forEach(plugin => {
    mix.copy(`Modules/Admin/node_modules/tinymce/plugins/${plugin}/plugin.js`, `Modules/Admin/Assets/js/wysiwyg/plugins/${plugin}`);
});


mix.then(() => {
    execSync('npm run rtlcss Modules/Admin/Assets/css/admin.css Modules/Admin/Assets/css/admin.rtl.css');
});