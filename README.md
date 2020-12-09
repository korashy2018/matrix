

## Matrix Multiplication Task

Multiply two matrices using API and Authorization by sanctum


##Usage
-localhost/matrix/public/register

<p>register user to use in api calls</p> 

-localhost/matrix/public/api/token
<p>send post request with user credentials registered from the previous route to generate token </p>

-localhost/matrix/public/api/multiply
<p>send post request with token in authorization header as bearer which is generated  from the previous route to get access  </p>

#Sample input

For token generation
insert the following two inputs
email and password

for multiplication
insert the following two inputs make sure both are arrays
first_matrix and second_matrix