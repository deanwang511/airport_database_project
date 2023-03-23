from os import name
import random

tables = ["planes", "airport", "p_employee", "airline", "operational_Hours", "lane", "customer", "a_employee", "flight_paths"]
attributes = [("planeID int PRIMARY KEY","Seats int","Size int","Meal_Plan text","Max_Altitude int","Plane_Type text","Fuel_Capacity int","airlineID int"),
               ("airportID int PRIMARY KEY","laneID int ","date text"),
               ("employeeID int PRIMARY KEY","Salary int","Job text","fname text","mname text","lname text","Age int","Access_Level int","planeID int","airlineID int"),
               ("airlineID int PRIMARY KEY","name text","number_of_lanes int","number_of_flights int"),
               ("date text PRIMARY KEY","Holiday int","Open_Hours int","Closing_Time int","Week_Days int"),
               ("laneID int PRIMARY KEY","Plane_Type text","Slot_Number int"),
               ("customersID int PRIMARY KEY","fname text","mname text","lname text","Seat_Number int","Class text","planeID int","airlineID int"),
               ("employeeID int PRIMARY KEY","Salary int","Job text","fname text","mname text","lname text","Age int","Access_Level int","airportID int"),
               ("pathID int PRIMARY KEY","Start_Location text","End_Location text","Duration int","Altitude int","planeID int","Overseas int",'date text')]

def get_name(t):
    choose = random.randint(0, 29)
    first = ['Darlene', 'Su', 'Mae', 'Kevin', 'Lai','Carisa', 'Rhea', 'Emilio', 'Shyla', 'Nellie',
                'Thomasina', 'Gilbert ', 'Elisha', 'Kelle', 'Lekisha','Erminia', 'Benita', 'Flor', 
                'Jacquelyne', 'Timmy', 'Bryan','Tonita', 'Marcelina', 'Laree', 'Viviana', 'Prudence', 
                'Marcelino', 'Margene', 'Garland', 'Mammie']
    middle = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'K','A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'K'
              'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'K','A', 'B', 'C', 'D']
    last=['Randazzo','Hawkinson','Ashworth','Chavira','Zeng','Belden','Almaguer','Lacoste','Vosburg','Wilke',
          'Lozano','Zuckerman','Mcelrath','Liggins','Stoute','Keough','Trent','Demasi','Voisin','Maggart','Pfeiffer',
          'Dunnigan','Heyden','Lyford','Nowell','Schildgen','Paff','Ferry','Marth','Zamora']
    if t=='f':
        return(first[choose])
    if t=='m':
        return(middle[choose])
    if t=='l':
        return(last[choose])

def generateAttributes(y, i):
    def gen(attr):
        if("ID" in attr):
            return i
        elif(attr == "Salary int"):
            return random.randint(10000,1000000)
        elif(attr == "Job text"):
            return "'" + random.choice(["Senior worker", "Assistant worker", "Associate worker"]) + "'"
        elif(attr == "name text"):
            return "'" + random.choice(["Aegean Airlines", "Air France", "HK Express", "Japan Airlines", "Luxair", "Nok Air"]) + "'"
        elif(attr == "fname text"):
            return "'" + get_name('f') + "'"
        elif(attr == "mname text"):
            return "'" + get_name('m') + "'"
        elif(attr == "lname text"):
            return "'" + get_name('l') + "'"
        # elif(attr == "Name text"):
        #     return "'" + get_name() + "'"
        elif(attr == "Hours_Per_Week int"):
            return random.randint(20,40)
        elif(attr == "Age int"):
            return random.randint(22,50)
        elif(attr == "Years_Worked int"):
            return random.randint(1,10)
        elif(attr == "Access_Level int"):
            return random.randint(1,3)
        elif(attr == "Seats int"):
            return random.randint(10, 500)
        elif(attr == "Size int"):
            return random.randint(10,200) * 1000
        elif(attr == "Meal_Plan text"):
            return "'" + random.choice(["Fast food", "Vegan", "Seafood"]) + "'"
        elif(attr == "Plane_Type text"):
            return "'" + random.choice(["Boeing 747", "Boeing 646", "Boeing 565"]) + "'"
        elif(attr == "Fuel_Capacity int"):
            return random.randint(100,1200) * 1000
        elif(attr == "Revenue int"):
            return random.randint(100,1000) * 10000
        elif(attr == "Profit int"):
            return random.randint(100,500) * 100
        elif(attr == 'date text'):
            if(i == 1):
                return "'1998-01-01'"
            elif(i == 2):
                return "'1999-01-04'"
            elif(i == 3):
                return "'2000-01-05'"
            elif(i == 4):
                return "'2002-01-07'"
            elif(i == 5):
                return "'2002-02-01'"
        elif(attr == "date text PRIMARY KEY"):
            if(i == 1):
                return "'1998-02-03'"
            elif(i == 2):
                return "'1999-01-12'"
            elif(i == 3):
                return "'2000-01-23'"
            elif(i == 4):
                return "'2002-04-01'"
            elif(i == 5):
                return "'2002-03-11'"
        elif(attr == "Holiday int"):
            return random.randint(0,1)
        elif(attr == "Week_Days int"):
            return random.randint(0,1)
        elif(attr == "Open_Hours int"):
            return random.randint(6, 9)
        elif(attr == "Closing_Time int"):
            return random.randint(22, 23)
        elif(attr == "Slot_Number int"):
            return random.randint(1, 200)
        elif(attr == "Position int"):
            return random.randint(1, 200)
        elif(attr == "Seat_Number int"):
            return str(random.randint(1, 200))
        elif(attr == "Class text"):
            return "'" + random.choice(["First Class", "Business", "Economy"]) + "'"
        elif(attr == "Start_Location text"):
            return "'" + "Our Airport City" + "'"
        elif(attr == "End_Location text"):
            return "'" + random.choice(["Paris", "London", "New York", "Dallas"]) + "'"
        elif(attr == "Duration int"):
            return random.randint(5,12)
        elif(attr == "Altitude int"):
            return random.randint(10000, 25000)
        elif(attr == "Overseas int"):
            return 1
        elif(attr == "monthAndYear text PRIMARY KEY"):
            return "'" + random.randint(1,12).__str__() + "/" + random.randint(1970, 2019).__str__() + "'"
        elif(attr == "Max_Altitude int"):
            return random.randint(10000, 25000)
        elif(attr == "number_of_flights int"):
            return random.randint(100, 250)
        elif(attr == "number_of_lanes int"):
            return random.randint(5, 30)
        elif(attr == "Lanes_Number int"):
            return random.randint(2, 15)
        
    def createStr(string, idx):
        if(idx == len(y)):
            return string + ")"
        if(gen(y[idx]) is None):
            print(y[idx])
        if(idx == 0):
            return createStr(string + str(gen(y[idx])), idx + 1)
        return createStr(string + "," + str(gen(y[idx])), idx + 1)
    
    string = "("
    return createStr(string, 0)
    
#for ia in range(4):
genAttributesList = sum(
    [list(map(lambda x, y: "insert into "+x+" values "+generateAttributes(y, 1)+";", tables, attributes)),
    list(map(lambda x, y: "insert into "+x+" values "+generateAttributes(y, 2)+";", tables, attributes)),
    list(map(lambda x, y: "insert into "+x+" values "+generateAttributes(y, 3)+";", tables, attributes)),
    list(map(lambda x, y: "insert into "+x+" values "+generateAttributes(y, 4)+";", tables, attributes)),
    list(map(lambda x, y: "insert into "+x+" values "+generateAttributes(y, 5)+";", tables, attributes))],
    [])
f = open('./sql_inserts.txt','w')

for x in genAttributesList:
    f.write(x)
    f.write('\n')
f.close()
