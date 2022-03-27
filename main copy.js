
// responsive nav menu toggle
const menuBtn = document.querySelector(".fa-bars");
const closeBtn = document.querySelector(".fa-xmark");
const navigation = document.querySelector(".nav");


menuBtn.addEventListener("click", () => {
    navigation.classList.add("active");
});

closeBtn.addEventListener("click", () =>{
    navigation.classList.remove("active");
})

// p_dashboard
$("#main").css('margin-right', '70px');

// sidenav
 var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-9725502-12']);
    _gaq.push(['_trackPageview']);
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(ga);
// notes
Loader.whenReady(function(){
    var notes = JSON.parse('[]');
    new NotesBuilder({
        namespace: $("#notes-namespace").val(),
        propertyId: $("#notes-propertyId").val(),
        tenantId:$("#notes-tenantId"),
        landlordId:$("#notes-landlordId"),
        vendorId: $("#notes-vendorId"),
        notes: notes
    });
});

// side
var maxToShow = 3;

    Loader.whenReady(function () {
        displayAlerts();
        $("#more").click(function() { 
            maxToShow += 3;
            displayAlerts();
        });
    });

    function displayAlerts() {
        var alerts = $(".item");
        alerts.each(function (index) {
            if (index < maxToShow) {
                if(!$(this).is(":visible"))
                    $(this).show("blind");
            }
            else
                $(this).hide();
        });
        if (alerts.length > maxToShow)
            $(".more").show("blind");
        else
            $(".more").hide("blind");
        if (alerts.length == 0)
            $("#alerts-box").hide("blind");
    }

    function dismissAlert(id) {
        ajax.post({
            url: "/dashboard/dismissalert",
            data: { id: id },
            success: function () {
                $("#alert-" + id).hide("blind");
                $("#alert-" + id).remove();
                displayAlerts();
            }
        });
    }