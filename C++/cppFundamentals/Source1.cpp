#include <iostream>
#include <string>
#include <fstream>
using namespace std;




int main() {
    int day = 4;     //Switch
    switch (day) {
    case 1:
        cout << "Monday";
        break;
    case 2:
        cout << "Tuesday";
        break;
    case 3:
        cout << "Wednesday";
        break;
    case 4:
        cout << "Thursday";
        break;
    case 5:
        cout << "Friday";
        break;
    case 6:
        cout << "Saturday";
        break;
    case 7:
        cout << "Sunday";
        break;
    }

{
    int i = 0;          //While Loop
    while (i < 5) {
        cout << i << "\n";
        i++;
    }


    return 0;
}


//For Loops- can nest loops

for (int i = 0; i < 5; i++) {
    cout << i << "\n";
}


// for each through an array
//Statement 1 is executed (one time) before the execution of the code block.
//Statement 2 defines the condition for executing the code block.
// Statement 3 is executed(every time) after the code block has been executed

int myNumbers[5] = { 10, 20, 30, 40, 50 };
for (int i : myNumbers) {
    cout << i << "\n";
}

/*

Class 
Note: You access methods just like you access attributes; by creating 
an object of the class and using the dot syntax (.):
*/

//Create a class
class MyClass {       // The class
public:             // Access specifier
    int myNum;        // Attribute (int variable)
    string myString;  // Attribute (string variable)
};


/*
* 
-- Inside Example ---
*/

class MyClass {        // The class
public:              // Access specifier
    void myMethod() {  // Method/function defined inside the class
        cout << "Hello World!";
    }
};

int main() {
    MyClass myObj;     // Create an object of MyClass
    myObj.myMethod();  // Call the method
    return 0;
}


/*
*
-- Outside Example ---
*/

class MyClass {        // The class
public:              // Access specifier
    void myMethod();   // Method/function declaration
};

// Method/function definition outside the class
void MyClass::myMethod() {
    cout << "Hello World!";
}

int main() {
    MyClass myObj;     // Create an object of MyClass
    myObj.myMethod();  // Call the method
    return 0;
}


/*
*
-- Parameters---
*/

class Car {
public:
    int speed(int maxSpeed);
};

int Car::speed(int maxSpeed) {
    return maxSpeed;
}

int main() {
    Car myObj; // Create an object of Car
    cout << myObj.speed(200); // Call the method with an argument
    return 0;
}





/*
*
-- Objects ---
*/
//Create an object
class MyClass {       // The class
public:             // Access specifier
    int myNum;        // Attribute (int variable)
    string myString;  // Attribute (string variable)
};

int main() {
    MyClass myObj;  // Create an object of MyClass

    // Access attributes and set values
    myObj.myNum = 15;
    myObj.myString = "Some text";

    // Print attribute values
    cout << myObj.myNum << "\n";
    cout << myObj.myString;
    return 0;
}

// Multiple Objects
class Car {
public:
    string brand;
    string model;
    int year;
};

int main() {
    Car carObj1;
    carObj1.brand = "BMW";
    carObj1.model = "X5";
    carObj1.year = 1999;

    Car carObj2;
    carObj2.brand = "Ford";
    carObj2.model = "Mustang";
    carObj2.year = 1969;

    cout << carObj1.brand << " " << carObj1.model << " " << carObj1.year << "\n";
    cout << carObj2.brand << " " << carObj2.model << " " << carObj2.year << "\n";
    return 0;
}

/*Break
You have already seen the 
break statement used in an 
earlier chapter of this tutorial. It was used to "jump out" of a switch statement.

The break statement can also be used to jump out of a loop.*/
for (int i = 0; i < 10; i++) {
    if (i == 4) {
        break;
    }
    cout << i << "\n";
}

//Continue, continue statement breaks one iteration (in the loop), if a specified condition occurs, and continues with 
//the next iteration in the loop.

for (int i = 0; i < 10; i++) {
    if (i == 4) {
        continue;
    }
    cout << i << "\n";
}

// Break and Continue in While Loop

int i = 0;
while (i < 10) {
    cout << i << "\n";
    i++;
    if (i == 4) {
        break;
    }
}

int i = 0;
while (i < 10) {
    if (i == 4) {
        i++;
        continue;
    }
    cout << i << "\n";
    i++;
}

//Access the Elements of an Array

int main() {
    string cars[4] = { "Volvo", "BMW", "Ford", "Mazda" };
    cout << cars[0];
    return 0;
}

//output Volvo

//Change an Array Element

string cars[4] = { "Volvo", "BMW", "Ford", "Mazda" };
cars[0] = "Opel";
cout << cars[0];
// Now outputs Opel instead of Volvo



/* C++ Structures
* Structures (also called structs) are a way to group several related variables into one place. Each variable
in the structure is known as a member of the structure.*/

// Create a Structure

struct {             // Structure declaration
  int myNum;         // Member (int variable)
  string myString;   // Member (string variable)
} myStructure;       // Name of Structure variable


/*Access Structure Members

To access members of a structure, use the dot syntax(.) :*/

// Create a structure variable called myStructure
struct {
    int myNum;
    string myString;
} myStructure;

// Assign values to members of myStructure
myStructure.myNum = 1;
myStructure.myString = "Hello World!";

// Print members of myStructure
cout << myStructure.myNum << "\n";
cout << myStructure.myString << "\n";

/*
* 
Name Structed
*/

struct myDataType { // This structure is named "myDataType"
    int myNum;
    string myString;
};

//To declare a variable that uses the structure, use the name of the structure as the data type of the variable:

myDataType myVar;


/*

One Structure in Multiple Variables
*/

struct {
    string brand;
    string model;
    int year;
} myCar1, myCar2; // We can add variables by separating them with a comma here

// Put data into the first structure
myCar1.brand = "BMW";
myCar1.model = "X5";
myCar1.year = 1999;

// Put data into the second structure
myCar2.brand = "Ford";
myCar2.model = "Mustang";
myCar2.year = 1969;

// Print the structure members
cout << myCar1.brand << " " << myCar1.model << " " << myCar1.year << "\n";
cout << myCar2.brand << " " << myCar2.model << " " << myCar2.year << "\n";


// C++ Files

//Create and Write To a File

#include <iostream>
#include <fstream>
using namespace std;

int main() {
    // Create and open a text file
    ofstream MyFile("filename.txt");

    // Write to the file
    MyFile << "Files can be tricky, but it is fun enough!";

    // Close the file
    MyFile.close();
}


/*Read a File

Note that we also use a while loop together with the getline() function (which belongs to the ifstream class) to read the file line by line, and to print the content of the file:

*/

// Create a text string, which is used to output the text file
string myText;

// Read from the text file
ifstream MyReadFile("filename.txt");

// Use a while loop together with the getline() function to read the file line by line
while (getline(MyReadFile, myText)) {
    // Output the text from the file
    cout << myText;
}

// Close the file
MyReadFile.close();



//Creating References

string food = "Pizza";
string& meal = food;

cout << food << "\n";  // Outputs Pizza
cout << meal << "\n";  // Outputs Pizza

//Memory Address

string food = "Pizza";

cout << &food; // Outputs 0x6dfed4

/*
Pointer
A pointer however, is a variable that stores the memory address as its value.

A pointer variable points to a data type (like int or string) of the same type, and is created with the * operator. The address of the variable you're working with is assigned to the pointer:
*/

string food = "Pizza";  // A food variable of type string
string* ptr = &food;    // A pointer variable, with the name ptr, that stores the address of food

// Output the value of food (Pizza)
cout << food << "\n";

// Output the memory address of food (0x6dfed4)
cout << &food << "\n";

// Output the memory address of food with the pointer (0x6dfed4)
cout << ptr << "\n";
