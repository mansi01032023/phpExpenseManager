<?php
session_start();
error_reporting(0);
?>
<!-- head section starts here -->

<head>
    <title>Expense Manager</title>
    <link rel="stylesheet" href="./CSS/style.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<!-- body section starts here -->

<body>
    <!-- container section starts here -->
    <div class="container">
        <div class="container__section">
            <button id="income" class="container__btn"><b>Income</b></button>
            <button id="expense" class="container__btn"><b>Expense</b></button>
        </div>
        <hr>
        <!-- section to add income -->
        <div class="container__add">
            <div id="addIncome">
                <label for="income" class="container__label">Income</label>
                <input type="number" id="enterIncome">
                <button id="addEnteredIncome" class="container__addbtn" onclick="addIncome()">Add</button>
            </div>
            <!-- section to add expense -->
            <div id="addExpense">
                <label for="expense" class="container__label">Expense</label>
                <input type="text" id="enterExpense">
                <select id="selectExpense">
                    <option value="Grocery">Grocery</option>
                    <option value="Veggies">Veggies</option>
                    <option value="Travelling">Travelling</option>
                    <option value="Miscellaneous">Miscellaneous</option>
                </select>
                <button id="addEnteredExpense" class="container__addbtn" onclick="addExpense()">Add</button>
            </div>
        </div>
        <hr>
        <!-- section to display income expense and remaining -->
        <div class="container__main">
            <br>
            <input type="text" readonly="readonly" id="showIncome" class="container__show"><br>
            <label for="income" id="showinc">Income</label><br><br>
            <input type="text" readonly="readonly" id="showExpense" class="container__show"><br>
            <label for="expense" id="showexp">Expense</label><br><br>
            <input type="text" readonly="readonly" id="showRemaining" class="container__show"><br>
            <label for="remaining" id="showrem">Remaining</label><br><br>
        </div>
        <hr>
        <!-- section to display category wise total amount spent -->
        <div>
            <table id="category">
                <thead>
                    <tr>
                        <th id="gro">Grocery</th>
                        <th id="veg">Veggies</th>
                        <th id="tra">Travelling</th>
                        <th id="mis">Miscellaneous</th>
                    </tr>
                </thead>
                <tbody id="categorytbody"></tbody>
            </table>
        </div>
        <hr>
        <!-- section to display all the expenses -->
        <div class="container__display">
            <table class="container__table">
                <thead>
                    <tr>
                        <th>Category</th>
                        <th>Expense</th>
                        <th>Edit</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody id="tbody">
                </tbody>
            </table>
        </div>
    </div>
</body>
<!-- adding the script -->
<script src="./JS/mansi.js"></script>