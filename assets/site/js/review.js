$(function () {
     
    $("#rateYo").rateYo({
      ratedFill: "#F8DDCA",
      halfStar: true,
      rating: 3,
      onSet: function (rating, rateYoInstance) {
         alert("Rating is set to: " + rating);
      }
    });
  });