For User:

This is a dynamic form project. It can make a CSV file into a web form and a database table and can store the data from the form to that database table.

It can't transform any CSV file to those things I said. You have to write the CSV file in a structured way. You have to learn the database syntax to write the file. 

CSV file format.
In every row, there must be five columns.

Syntax: Table_name, Field Label, Field Type, "field Value", column datatype.
Example: table_name, Dress, select, "Dress: Shirt Pants", VARCHAR(100)

1. Database Table name(Only for the first row): This name is going to be the database table name where the data is gonna store.

2. Field Label: Database column name and it would appear on the form as text name. Example: Username. It will appear on the text box as it's name.

3. Field Type: It is the type of text box. It would determine what kind of data you can be able to enter. For example: if you want to store text data you should write text. (https://www.w3schools.com/html/html_form_input_types.asp). This is a list of input types. You can only use these -> "text, password, email, number, color, tel, range, radio, select, datetime-local".

4. Field Value: It's not for every kind of form type. It is for the radio button or select box or check box. Example: "Dress: Shirt Pants", This(Dress:) part should be as same as

5.  Database table's column data type. Use this link to learn more. (https://www.w3schools.com/mysql/mysql_datatypes.asp). 

---------------------------------------------------------------------------------------

For developer:

The test.php file is the backbone of this project. Break it and you don't have a project. To fix it you have to research every bit of information you have on the internet. And which is nothing. 

This file is reading the CSV files and breaking them into pieces and making them accessible for testForm file to make a dynamic form.

testForm.php file makes the form and stores the data into a database table.

table.php file is making the database table.

choose.php file is choosing the CSV file. And chooseNumber.php is choosing the file number from the folder.

There's a lot of explanation inside these files. Read those and if you can't understand, don't worry I also don't understand them. It works. And that is the real deal.

There is a lot of basic programming work. Especially string and array. Watch a lot of basic string tutorials. 

