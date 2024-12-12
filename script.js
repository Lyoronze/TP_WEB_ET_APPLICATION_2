(document).ready(function(){
    $('form>input[type=email]').on('blur', checkEmail)
    $('form>input[type=prenom]').on('' , checkChamp())

    function checkEmail () {
        entered_email = $('form>input[type=email]').val()

        $.ajax(a)
        a={
            url: "email_checker.php",
            type: "POST",
            data: {'email': entered_email},
            success: function (result) {
                data = JSON.parse(result)
            },
            error: function (err) {
                alert("Une erreur s'est produite"+err)
            }
        }
    }
    function checkChamp(){
        name = $('form>input[name=first_name]').val()
        lastname = $('form>input[name=last_name]').val()

        $.ajax(b)
        b={
            url: "champ_checker.php",
            type: "POST",
            data: {'name': name , 'last_name' : lastname},
            success: function (result) {
                data = JSON.parse(result)
            },
            error: function (err) {
                alert("Une erreur s'est produite"+err)
            }
        }
    }
    function afficherCLient(){

    }
});
//accolade '' definit un objet