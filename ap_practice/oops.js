const clothes={
    type:"pajama",
    colo :"pink",
    quatity:2,
    total_price : function(){
        this.price = this.quatity*5;
        console.log("Total price is: ",this.price);
    }
};

const print = {
    hello: function(){
        console.log("hello guys chai pee lo");
    }
};
clothes.__proto__= print; // now all the prototypes that is methods or functions of print are applicable tp clothes
let arr = ["apple","mango","banana","litchi"];
arr.push("macha");
arr.shift(); // apple nikal gaya
arr.pop(); // last wale macha nikal gaya
arr.unshift("tuti-fruity");  // first me insert ho gaya
arr.reverse();
arr.slice(2,4); // returns a section of array
arr.splice(2,4); // deletes this section of


class Bake {
    constructor(flavour,price){
        console.log("baking starts dhukchuk dhukchuk...");
        this.flavour = flavour;
        this.price = price
    }
    on(){
        console.log("microwave on:");
    }

    off(){
        console.log("microwave off:");
    }
}

let cake = new Bake("chocolate","350"); 
// object created by class have all the properties and methods of that class here class is Bake
// object creates constructor invokes and firstly performs constructor ka method.
let cookie = new Bake("vanilla","250");

// now if we want to add same methods and properties of a class in not a object but a new class then we go for inheritance

class parent{
    eyes(){
        console.log("eyes are brown");
    }
    hair(){
        console.log("hair is black");
    }
}

class child extends parent{                  // child class will have all the methos and pro
    constructor(gender){
        super(); // invoke parent class constructor and know parent is formed
        this.gender = gender;
        console.log("Mubarak ho ",gender,"hai");
    }
    generation(){
        console.log("genz");
        super.eyes();
        super.hair();
    }
}

let sidrah = new child("beti");

class user{
    constructor(name,email){
        this.name = name;
        this.email = email;
    }

    view(){
        console.log("you are viewing data");
    }
}
let a=5;
let b = 10;
console.log("a+b=",a+b);
console.log("a+b=",a+b);
try{
    console.log("a+b=",a+c); // here is an error i have a doubt so it will check for me 
}catch(err){   // if error is caught it will perform the task given 
    console.log("the error is ",err);
} // and will continue the code without terminating
console.log("a+b=",a+b);

let user1 = new user("sidrah","sidrahaaishah1@gmail.com");
let user2 = new user("meri","toona.com");
