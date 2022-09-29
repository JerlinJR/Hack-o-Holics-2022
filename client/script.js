$(document).ready(function () {
    toggleFields();
    $("#roads").change(function () {
      toggleFields();
    });
});
  
function toggleFields() {
  if ($("#roads").val() === "stateHighway") {
    $("#stateHighway").show();
  } else {
    $("#stateHighway").hide();
  }
  if ($("#roads").val() === "district") {
    $("#district").show();
  } else {
    $("#district").hide();
  }
  if ($("#roads").val() === "villageRoad") {
    $("#villageRoad").show();
  } else {
    $("#villageRoad").hide();
  }
}
  

  // submiting one select 

$(function(){
  const stateHigh = function(){
      let state = $("#stateHighway").val();
      $("#district").prop("disabled", state !== "");
      $("#villageRoad").prop("disabled", state !== "");
  };
  
  const disRoad = function(){
      let dis = $("#district").val();
      $("#stateHighway").prop("disabled", dis !== "");
      $("#villageRoad").prop("disabled", dis !== "");
  };


  const village = function(){
    let vill = $("#villageRoad").val();
    $("#stateHighway").prop("disabled", vill !== "");
    $("#district").prop("disabled", vill !== "");
  };
  
  // Update the lists when a value is selected:
  $("#stateHighway").change(stateHigh);
  $("#district").change(disRoad);
  $("#villageRoad").change(village);
  
  // Handle the initial value, if any:
  stateHigh();
  disRoad();
  village();
});

