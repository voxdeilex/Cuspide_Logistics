const plus = "+";

 function contador() {
     const counters = document.querySelectorAll('.counter');
     const speed = 3;
     counters.forEach(counter => {
         const updateCount = () => {
            const target = +counter.getAttribute('data-target');
             const count = +counter.innerText;
             const inc = target / speed;
             if (count < target) {
                 counter.innerText = count + inc;
                 setTimeout(updateCount, 1);
            }
             else {
                 counter.innerText = target;
            }};
           
          updateCount();
    });

    $(function () {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
        });
}
 