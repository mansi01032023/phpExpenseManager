// flag is initially set to zero for edit functionality
let flag = 0;

$(document).ready(function () {
  $("#addExpense").hide();
  $("#addIncome").hide();
});
$("#income").click(function () {
  $("#addExpense").hide();
  $("#addIncome").show();
});

$("#expense").click(function () {
  $("#addIncome").hide();
  $("#addExpense").show();
});
// function to add income
function addIncome() {
  let income = $("#enterIncome").val();
  $.ajax({
    url: "addIncome.php",
    type: "POST",
    data: "income=" + income,
    datatype: "number",
  }).done(function (result) {
    let res = jQuery.parseJSON(result);
    $("#showIncome").val(res["income"]);
    $("#showRemaining").val(res["remaining"]);
    $("#showExpense").val(res["totalExpense"]);
    total();
    display();
  });
}
// function to add expense
function addExpense() {
  let expense = $("#enterExpense").val();
  let category = $("#selectExpense").val();
  $.ajax({
    url: "addExpense.php",
    type: "POST",
    data: { Expense: expense, Category: category, flag: flag },
    datatype: "JSON",
  }).done(function (result) {
    let res = jQuery.parseJSON(result);
    $("#showIncome").val(res["income"]);
    $("#showRemaining").val(res["remaining"]);
    $("#showExpense").val(res["totalExpense"]);
    $("#addEnteredExpense").html("Add");
    flag = 0;
    total();
    display();
  });
}
// function to display the expenses
function display() {
  $.ajax({
    url: "display.php",
    type: "POST",
  }).done(function (result) {
    $("#tbody").html(result);
  });
}
// function to delete the expense
function deleteExpense(id) {
  $.ajax({
    url: "delete.php",
    type: "POST",
    data: "id=" + id,
  }).done(function (result) {
    let res = jQuery.parseJSON(result);
    $("#showIncome").val(res["income"]);
    $("#showRemaining").val(res["remaining"]);
    $("#showExpense").val(res["totalExpense"]);
    total();
    display();
  });
}
// function to edit expense
function editExpense(id) {
  flag = 1;
  $.ajax({
    url: "editExpense.php",
    type: "POST",
    data: "id=" + id,
  }).done(function (result) {
    let res = jQuery.parseJSON(result);
    $("#enterExpense").val(res["value"]);
    $("#selectExpense").val(res["key"]);
    $("#addEnteredExpense").html("Update");
    total();
    display();
  });
}
// function to show category wise totalamount spent
function total() {
  $.ajax({
    url: "categoryTotal.php",
  }).done(function (result) {
    $("#categorytbody").html(result);
  });
}
