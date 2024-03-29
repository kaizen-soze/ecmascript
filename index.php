<!doctype html>
<html lang="en">
  <head>
    <!-- Shout-out to https://webapplog.com/es6/ for some of the examples! -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="kaizen-soze">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Modern ECMAScript Features</title>
  </head>
  <body>
      <div class="container">
        <h1>ES6 (ECMAScript 2015) Features</h1><br />
        <p>For an exhaustive breakdown of all new features (along with code examples), <a href="https://codetower.github.io/es6-features/" target="_blank">click here</a></p>
        
        <div class="card" style="margin-bottom: 15px;">
          <div class="card-header">
            Semicolons are now optional
          </div>
          <div class="card-body">
            <pre>
              <code>
  // Old way
  x = 10;

  // ES6
  x = 10
              </code>
            </pre>
          </div>
        </div>

        <div class="card" style="margin-bottom: 15px;">
          <div class="card-header">
            Introducing <em>const</em> and <em>let</em>
          </div>
          <div class="card-body">
            <pre>
              <code>
  // Use const for values that will not need to change
  const pi = 3.14159352

  // Use let for values that will change
  let age = 0

  // Don't use var. It's valid js, but <a href="https://softwareengineering.stackexchange.com/questions/274342/is-there-any-reason-to-use-the-var-keyword-in-es6" target="_blank">there is no real need for it in ES6</a>
  var x = 8
              </code>
            </pre>
            <ul>
              <li><a href="var.php" target="_blank">Example of Function and Global scope with var</a></li>
              <li><a href="let.php" target="_blank">Example of block scope with let</a></li>
            </ul>
          </div>
        </div>

        <div class="card" style="margin-bottom: 15px;">
          <div class="card-header">
            Functions can have default values
          </div>
          <div class="card-body">
            <pre>
              <code>
  function myCoolFunction(name = 'Carl', age = 0) {

  }
              </code>
            </pre>
          </div>
        </div>

        <div class="card" style="margin-bottom: 15px;">
          <div class="card-header">
            Variable Interpolation
          </div>
          <div class="card-body">
            <pre>
              <code>
  // Old way
  var name = 'Your name is ' + first + ' ' + last + '.'
  var url = 'http://localhost:3000/api/messages/' + id

  // ES6
  var name = `Your name is ${first} ${last}.`
  var url = `http://localhost:3000/api/messages/${id}`
              </code>
            </pre>
          </div>
        </div>

        <div class="card" style="margin-bottom: 15px;">
          <div class="card-header">
            Multi-line strings
          </div>
          <div class="card-body">
            <pre>
              <code>
// Old way
var roadPoem = 'Then took the other, as just as fair,\n\t'
    + 'And having perhaps the better claim\n\t'
    + 'Because it was grassy and wanted wear,\n\t'
    + 'Though as for that the passing there\n\t'
    + 'Had worn them really about the same,\n\t'

var fourAgreements = 'You have the right to be you.\n\
    You can only be you when you do your best.'

// ES6 - Use backticks
var roadPoem = `Then took the other, as just as fair,
    And having perhaps the better claim
    Because it was grassy and wanted wear,
    Though as for that the passing there
    Had worn them really about the same,`

var fourAgreements = `You have the right to be you.
    You can only be you when you do your best.`
              </code>
            </pre>
          </div>
        </div>

        <div class="card" style="margin-bottom: 15px;">
          <div class="card-header">
            Object Destructuring
          </div>
          <div class="card-body">
            <p>
              Object destructuring allows you to assign variables based on the contents of an object
              via a special, concise syntax.
            </p>
            <pre>
              <code>
const person = {
  name: 'Harry',
  age: 22,
}

let {name, age, height = `6' 0"`} = person

console.log(name)   // Outputs: Harry
console.log(age)   // Outputs: 22
console.log(height)   // Outputs: 6'0"
              </code>
            </pre>
          </div>
        </div>

        <div class="card" style="margin-bottom: 15px;">
          <div class="card-header">
            Array Destructuring
          </div>
          <div class="card-body">
            <p>
              Array destructuring allows you to assign variables based on the contents of an array
              via a special, concise syntax.
            </p>
            <pre>
              <code>
let numbers = [400, 3000]

let [one, two, three = 90] = numbers

console.log(one)   // Outputs: 400
console.log(two)   // Outputs: 3000
console.log(three)   // Outputs: 90
              </code>
            </pre>
          </div>
        </div>

        <div class="card" style="margin-bottom: 15px;">
          <div class="card-header">
            Arrow Functions
          </div>
          <div class="card-body">
            <p>
              Arrow functions are a more concise way to write functions
            </p>
            <pre>
              <code>
// Old way
var multiply = function (x, y) {
  return x * y;
}

// ES6
const multiply = (x, y) => {return x * y};

// When the contents of a method are just one line, the return keyword is implicit
const multiply = (x, y) => x * y;

// parentheses are optional when there's only one parameter
const printName = myName => {console.log(`My name is ${myName}`)};
              </code>
            </pre>
          </div>
        </div>

        <div class="card" style="margin-bottom: 15px;">
          <div class="card-header">
            Spread Syntax
          </div>
          <div class="card-body">
            <p>
              Spread syntax allows a more concise way to combine and use arrays
            </p>
            <pre>
              <code>
let parts = ['shoulders', 'knees']
let lyrics = ['head', ...parts, 'and', 'toes']
// lyrics is now: ['head', 'shoulders', 'knees', 'and', 'toes']

              </code>
            </pre>
            <p>Spread syntax offers a better way to concatenate arrays</p>
            
            <pre>
              <code>
// Old way to concatenate
let arr1 = [0, 1, 2]
const arr2 = [3, 4, 5]
arr1 = arr1.concat(arr2)

// ES6
let arr1 = [0, 1, 2]
const arr2 = [3, 4, 5]
arr1 = [...arr1, ...arr2] // arr1 is now [0, 1, 2, 3, 4, 5]
              </code>
            </pre>
          </div>
        </div>

        <div class="card" style="margin-bottom: 15px;">
          <div class="card-header">
            Rest Syntax
          </div>
          <div class="card-body">
            <p>
              Rest syntax allows a method to accept an unspecified number of arguments
            </p>
            <pre>
              <code>
function variableLengthArguments(a, b, ...manyMoreArgs) {
  console.log("a", a)
  console.log("b", b)
  console.log("manyMoreArgs", manyMoreArgs)
}

variableLengthArguments("one", "two", "three", "four", "five", "six");

// a, one
// b, two
// manyMoreArgs, [three, four, five, six]
              </code>
            </pre>
          </div>
        </div>


      </div>

    <!-- Optional JavaScript -->
    <script>

    </script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>