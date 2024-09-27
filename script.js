// SWITCH MODE

const checkbox = document.getElementById('checkbox');
let isLight = 0;

checkbox.addEventListener('change', () => {
    if (isLight == 0) {
        $.post('../../src/Switcher/Switcher.php',{action:1})
        .done((response)=>{
            $('link[href="../../css/dark.css"]').attr("href","../../css/light.css")
            isLight = 1
        })
        .fail((error)=>{
           
        })
    } else {
        $.post('../../src/Switcher/Switcher.php',{action:0})
        .done((response)=>{
            $('link[href="../../css/light.css"]').attr("href","../../css/dark.css")
            isLight = 0
        })
        .fail((error)=>{
           
        })

    }
    });

    $.post('../../src/Switcher/Switcher.php',{action:2})
    .done((response)=>{
    
        if(response.theme == 0){
            $('link[href="../../css/light.css"]').attr("href","../../css/dark.css")
            isLight = 0
            return;
        }
        $('link[href="../../css/dark.css"]').attr("href","../../css/light.css")
        isLight = 1
    })
    .fail((error)=>{
     
    })
// COPY BIND
 let copyText = document.querySelector(".copy-text");
    copyText.querySelector("button").addEventListener("click", function(){
        let input = copyText.querySelector("input.text");
         input.select();
         document.execCommand("copy");

 });