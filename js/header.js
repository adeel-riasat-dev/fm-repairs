const submenuDiv = document.getElementById('submenudivv');
const submenuHeader = document.querySelector('.submenuheader');

submenuDiv.addEventListener('mouseover', () => {
    submenuHeader.style.display = 'block';
});

submenuDiv.addEventListener('mouseout', (event) => {
    if (!submenuHeader.contains(event.relatedTarget)) {
        submenuHeader.style.display = 'none';
    }
});

submenuHeader.addEventListener('mouseover', () => {
    submenuHeader.style.display = 'block';
});

submenuHeader.addEventListener('mouseout', (event) => {
    if (!submenuDiv.contains(event.relatedTarget)) {
        submenuHeader.style.display = 'none';
    }
});



        function applyHoverEffect(triggerId, targetId, hoverColor, defaultColor) {
            const triggerElem = document.getElementById(triggerId);
            const targetElem = document.getElementById(targetId);

            triggerElem.addEventListener('mouseover', function() {
                targetElem.style.color = hoverColor;
                
            });

            triggerElem.addEventListener('mouseout', function() {
                targetElem.style.color = defaultColor;
            });
        }

        applyHoverEffect('menusinnn', 'hoveron', '#3d3da8', 'white');
        applyHoverEffect('menusinnn2', 'hoveron2', '#3d3da8', 'white');

        window.onscroll = function() {

            var myDiv = document.getElementById("myDiv");
            if (document.documentElement.scrollTop > 2) {
                myDiv.classList.add("scrolled");
            } else {
                myDiv.classList.remove("scrolled");
            }
            var myDiv2 = document.getElementById("togleafteds");
            if (document.documentElement.scrollTop > 2) {
                myDiv2.classList.add("scrlmen");
            } else {
                myDiv2.classList.remove("scrlmen");
            }
            var myDiv3 = document.getElementById("menkdsfkasdf");
            if (document.documentElement.scrollTop > 2) {
                myDiv3.classList.add("scrlmenuall");
            } else {
                myDiv3.classList.remove("scrlmenuall");
            }

        };

