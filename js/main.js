$(document).ready(function () {

$('.addCountry').click(function(){
    event.preventDefault();
    $('.addCountryForm').show();
    $('.addMedalForm').hide();
    $('.addSportForm').hide();
    $('.addSportsmenForm').hide();
});
$('.addMedal').click(function(){
    event.preventDefault();
    $('.addMedalForm').show();
    $('.addCountryForm').hide();
    $('.addSportForm').hide();
    $('.addSportsmenForm').hide();
});
$('.addSport').click(function(){
    event.preventDefault();
    $('.addSportForm').show();
    $('.addMedalForm').hide();
    $('.addCountryForm').hide();
    $('.addSportsmenForm').hide();
});
$('.addSportsmen').click(function(){
    event.preventDefault();
    $('.addSportsmenForm').show();
    $('.addMedalForm').hide();
    $('.addSportForm').hide();
    $('.addCountryForm').hide();
});
$('.addbtncansle').click(function(){
  $(this).closest("form").hide();
});

$('.addCountryForm ').submit(function (event) {
  event.preventDefault();
  var countryname = $(this).children("input[name=country_name]").val();
  var countryreduction = $(this).children("input[name=country_reduction]").val();

  $.ajax({
        type: "POST",
        url: "../addons/add-country.php",
        data:{
          country_reduction: countryreduction,
          country_name: countryname,
        }, 
        success: function(html){
                $('.test').html("Удачно");
                console.log(html);
        }
      });
});

$('.addSportForm').submit(function (event) {
  event.preventDefault();
  var sportname = $(this).children("input[name=sport_name]").val();

  $.ajax({
        type: "POST",
        url: "../addons/add-sport-type.php",
        data:{
          sport_name: sportname,
        }, 
        success: function(html){
                $('.test').html("Удачно");
                console.log(html);
        }
      });
});

$('.delete-sport-type').click(function(){
  event.preventDefault();
  $(this).closest("tr").hide();
  var val =  $(this).val();

  $.ajax({
        type: "POST",
        url: "../addons/delete-sport-type.php",
        data:{
          sport_type_id: val,
        }, 
        success: function(html){
                $('.test').html("Удачно");
                console.log(html);
        }
      });
});

$('.delete-countr').click(function(){
  event.preventDefault();
  $(this).closest("tr").hide();
  var val =  $(this).val();

  $.ajax({
        type: "POST",
        url: "../addons/delete-country.php",
        data:{
          countries_id: val,
        }, 
        success: function(html){
                $('.test').html("Удачно");
                console.log(html);
        }
      });
});

$('.addSportsmenForm').submit(function (event) {
  event.preventDefault();
  var sportsmen_name = $(this).children("input[name=name]").val();
  var sportsmen_surname = $(this).children("input[name=surname]").val();
  var sportsmen_county_id = $(this).children("select[name=county_id]").val();

  $.ajax({
        type: "POST",
        url: "../addons/add-sporsmen.php",
        data:{
          sportsmen_name: sportsmen_name,
          sportsmen_surname: sportsmen_surname,
          sportsmen_county_id: sportsmen_county_id,
        }, 
        success: function(html){
                $('.test').html("Удачно");
                console.log(html);
        }
      });
});

$('.delete-sporsmen').click(function(){
  event.preventDefault();
  $(this).closest("tr").hide();
  var val =  $(this).val();

  $.ajax({
        type: "POST",
        url: "../addons/delete-sportsmen.php",
        data:{
          sportsmen_id: val,
        }, 
        success: function(html){
                $('.test').html("Удачно");
                console.log(html);
        }
      });
});

$('.addMedalForm ').submit(function (event) {
  event.preventDefault();
  var medal_type_id = $(this).children("select[name=medal_type_id]").val();
  var sportsmen_id1 = $(this).children("select[name=sportsmen_id1]").val();
  var sportsmen_id2 = $(this).children("select[name=sportsmen_id2]").val();
  var sportsmen_id3 = $(this).children("select[name=sportsmen_id3]").val();
  var sportsmen_id4 = $(this).children("select[name=sportsmen_id4]").val();
  var sportsmen_id5 = $(this).children("select[name=sportsmen_id5]").val();
  var sport_type_id = $(this).children("select[name=sport_type_id]").val();

  console.log(medal_type_id);
  console.log(sportsmen_id1);
  console.log(sportsmen_id2);
  console.log(sportsmen_id3);
  console.log(sportsmen_id4);
  console.log(sportsmen_id5);
  console.log(sport_type_id);

  $.ajax({
        type: "POST",
        url: "../addons/add-medail.php",
        data:{
          medal_type_id: medal_type_id,
          sportsmen_id1: sportsmen_id1,
          sportsmen_id2: sportsmen_id2,
          sportsmen_id3: sportsmen_id3,
          sportsmen_id4: sportsmen_id4,
          sportsmen_id5: sportsmen_id5,
          sport_type_id: sport_type_id,
        }, 
        success: function(html){
                console.log(html);
        },
        error: function(xhr,status,error){
          console.log(status);
          console.log(error);
        }
      });
});

});
