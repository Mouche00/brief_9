

$(document).ready(function(){

    const URLROOT = "http://localhost:8000";

    let url = window.location.href.split("/");
    let pageName = url[url.length - 1];

    $('#page-name').html(`${pageName}`);

    // let sidebar = document.querySelector(`#sidebar`);
    // let allSections = Array.from(sidebar.children);
    // allSections.forEach(e => {
    // e.classList.replace("text-black", "hover:text-black");
    // e.classList.replace("bg-white", "hover:bg-white"); 
    // });

    // let currentSection = document.querySelector(`#${pageName}`);
    // currentSection.classList.replace("hover:text-black", "text-black");
    // currentSection.classList.replace("hover:bg-white", "bg-white");

   

    function draw(){
        $.ajax({
            url: URLROOT + '/insurers/display',
            type: 'GET',
            success: function(response){
                let data = JSON.parse(response);
                data = data.insurers;
                $('tbody').html('');
                let row = "";
                let element = "";
                data.forEach(e => {
                    row = $("<tr>", {class: "h-10"});
                    for (const [key, value] of Object.entries(e)) {
                        element = $("<td>", {class: "border-black border-2 rounded-sm"});
                        element.html(value);
                        row.append(element);
                    }
                    element = $("<td>", {class: "border-black border-2 rounded-sm"});
                    sub = $("<button>", {class: "", type: "button"});
                    sub.attr('data-id', `${e.id}`);
                    value = "DELETE";
                    sub.html(value);
                    element.html(sub);
                    row.append(element);
                    $('tbody').append(row);
                });
    
            }
        });
    }

    draw();
})
