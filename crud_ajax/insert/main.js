$(document).ready(function() {
    //make a function Loadtable
    function loadTable() {
        $.ajax({
            url: "ajax_load.php",
            type: "POST",
            success: function(data) {
                $("#table-data").html(data);
            }
        });
    }
    //call function LoadTable
    loadTable();

    $("#save-button").on("click", function(e) { //setting click event on the 'save-button ' id when click on it the one function will run that function is anonymous function
        e.preventDefault(); //it will stop to submit the form
        var id = $("#id").val(); //fetch the value form the id and put in the 'id ' variable
        var name = $("#name").val(); //fetch the name form input fieled ID
        if (id == "" || name == "") {
            $("#error-message").html("All fiels are Require .").slideDown();
            $("#success-message").slideUp();
        } else {

            $.ajax({
                url: "ajax_insert.php", //location of the folder where we are going to insert data Into DB
                type: "POST",
                data: { id_user: id, name_user: name }, //fetch the name and conver into object to access it by keys
                //where id_user =>is a key which hold the value of the id , and also same to same name_user=>holds the name of the user
                success: function(data) {
                    if (data == 1) {
                        loadTable(); //load again data from server here to show all the data in the table
                        $("#addForm").trigger("reset"); //reset form after enter submit button
                        $("#success-message").html("Data Inserted Successfully .").slideDown();
                        $("#error-message").slideUp();
                    } else {

                        $("#error_message").html("All fiels are Require .").slideDown();
                        $("#success-message").slideUp();
                    }
                }

            });

        }



    });

});