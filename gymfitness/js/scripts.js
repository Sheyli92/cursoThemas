//este contiene los script personalizados
//jQuery(document).ready(function($){});
jQuery(document).ready($=>{
    //poner site-header para indicar que solo el que esta en el header sea responsive
    $('.site-header .menu-principal .menu').slicknav({
        label:'',//quitamos el nombre MENU de menu
        appendTo:'.site-header'
    });
});