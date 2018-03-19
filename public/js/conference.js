$("#conference-registration").submit(function(e) {
    $.ajax({
        url: "/public/functions/write_conference_csv.php",
        type: "POST",
        data: $(":input", this),
        success: function(json) {
            this.submit();
        }
    });
});
