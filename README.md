

# Matrix Multiplication Task

Multiply two matrices using API and Authorization by sanctum


#Usage

-localhost/matrix/public/register

<p>register user to use in api calls</p> 

-localhost/matrix/public/api/token
<p>send post request with user credentials registered from the previous route to generate token </p>

-localhost/matrix/public/api/multiply
<p>send post request with token in authorization header as bearer which is generated  from the previous route to get access  </p>

#Sample input

For token generation
<p>insert the following two inputs</p>

1-email 

2-password

for multiplication

insert the following two inputs make sure both are arrays

1-first_matrix  
2-second_matrix