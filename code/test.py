import mysql.connector

mydb = mysql.connector.connect(
  host="localhost",
  user="root",
  password="P@ssword1234",
  database="person"
)

mycursor = mydb.cursor()

mycursor.execute("SELECT * FROM Employee1")

myresult = mycursor.fetchall()

for x in myresult:
  print(x)