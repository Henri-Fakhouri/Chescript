# Chescript
Description coming soon

Chescript
A Senior Project Submitted in Partial Fulfillment of the Requirements for the Bachelor’s Degree
in
Computer Science
Department of Computer Science
Faculty of Natural and Applied Sciences
Notre Dame University – Louaize
North Lebanon
Henri Fakhouri
Jihad Kouzi
January 2020

 
Dedication
We dedicate this project to our family and friends, our teachers who made us love what we do, and the beautiful game of chess.
 
Acknowledgements
We would like to express our greatest gratitude to Dr. Bashir Maroun, for being a brother and a mentor to us since our first semester.
Also, many thanks to Dr. Marie Khair for her efforts and commitment to giving us the best academic experience.



 
Abstract
	Chess engines, computer programs that analyze chess positions and choose the “best move”, have always been regarded as dumb because of their brute force approach towards chess positions. However, as time went on, engines started to use artificial intelligence approaches towards the beautiful game. Our chess engine uses the min/max algorithm with alpha-beta pruning, a well-known depth-based machine learning algorithm. What sets our product apart from other engines, is that it is completely developed using JavaScript. This means it is very lightweight and runs on any device with a JavaScript enabled browser. Another great feature is the ability to do move analysis using chrome’s console.
Keywords: [Chess, machine learning, engine, analysis]

 
Table of Contents
Dedication	ii
Acknowledgements	iii
Abstract	iv
List of Tables	vii
List of Figures	viii
Chapter 1 : Business Vision, Glossary, and Risks	1
1.1 Introduction	1
1.2 Definitions, Acronyms, and Abbreviations	1
1.3.1 <Chess Engine>	1
1.3.2 <JavaScript>	1
1.3 Positioning	1
1.3.1 Business Opportunity	1
1.3.2 Product Position Statement	2
1.4 Senior Study Objective	2
1.5 Approach	2
Chapter 2 : Background	3
2.1 User Summary and Competition	3
2.3.1 User Summary	3
2.3.2 Alternatives and Competition	3
2.2 Ethics	4
2.3 Other Requirements	4
2.3.1 Applicable Standards	4
2.3.2 System Requirements	4
2.3.3 Performance Requirements	4
Chapter 3 : Requirements Elicitation	5
3.1 Adopted Technique(s)	5
3.2 Questions	5
3.3 Answers	5
Chapter 4 : Requirements and Use Case Diagram	7
4.1 Functional Requirements	7
4.2 Non-Functional Requirements	7
Chapter 5 : Functional Requirements Specification	8
5.1 Use Case Specification for Chescript	8
5.3.1 Brief Description	8
5.3.2 Actors	8
5.3.3 Basic Flow of Events	9
5.3.4 Alternative Flows of Events	9
5.3.5 Preconditions	9
5.3.6 Postconditions	9
Chapter 6 : Domain Analysis	10
6.1 Domain Model Class Diagram	10
Chapter 7 :  Interaction and Data Flow Diagrams	11
7.1 Sequence Diagrams	11
7.3 Activity Diagram	12
Chapter 8 : User Interface Design	13
8.1 Final UI Design	13
Chapter 9 : Coding and Testing	20
9.1 Algorithms	20
10.1.1 Validation Code	20
10.1.2 Machine Learning	22
Chapter 10 : Conclusions and Recommendations	28
10.1 Summary of the Main Results	28
10.2 Main Contributions	28
10.3 Possible Extensions and Future Work	29
Appendix A: Presentation	30
	31
	33
Appendix B: Code Samples	36
	
 
List of Tables
Table 1.2: Product Positioning	2
Table 2.1: User Summary	3
Table 4.1: List of Functional Requirements	7
Table 4.2: List of Non-Functional Requirements	7
	



 
List of Figures
Figure 1: Use Case Diagram	8
Figure 2: Class Diagram	10
Figure 3: Sequence diagram for Login	11
Figure 4: Activity diagram for the game	12
Figure 5: Home Page	13
Figure 6: Play page	14
Figure 7: Sign up page	15
Figure 8: Login page	16
Figure 9: Chess board	17
Figure 10: Main game	18
Figure 11: The Ruy Lopez variation	19
Figure 12: JavaScript Login validation	20
Figure 13: PHP validation code	21
Figure 14: Chescript using machine learning, as shown in the console	22
Figure 15: Important Definitions	23
Figure 16: Alpha-Beta algorithm	24
Figure 17: Continuation of the Alpha-Beta Algorithm	25
Figure 18: Iterative deepening	26
Figure 19: Continuation	27
Figure 20: Commented code for the score system	29
Figure 21: Evaluation table	37
Figure 22: Draw conditions	38
Figure 23: PrintBoard() Function	39
Figure 24: GUI	40
	
 
Chapter 1: Business Vision, Glossary, and Risks
1.1 Introduction
This chapter discusses the problem definition and the people who will benefit from the project.
1.2 Definitions, Acronyms, and Abbreviations
1.3.1 <Chess Engine>
A computer program that analyses chess positions, then plays the best move accordingly.
1.3.2 <JavaScript>
An object-oriented programming language that runs on most browsers. 
1.3 Positioning
1.3.1 Business Opportunity
This application can be used on all JavaScript-compatible browsers, which means it’ll run on any device. The engine also outputs its own evaluation of every move into the console, which enables the users of not only enjoying a chess game, but to analyze the positions too.





1.3.2 Product Position Statement
Table 1.2: Product Positioning
For	Chess players
Who	Want to play chess 
The (Chess Engine)	 is a software
That	Will challenge users in chess And provide analysis
Unlike	Stockfish 
Our product	Is more lightweight, plays faster, completely free, enables easy chess analysis using chrome console
1.4 Senior Study Objective
The main objective of this senior study is to design a Chess engine that will run easily on any JavaScript-compatible browser. We chose this topic to prove our skill at web development and the implementation of machine learning algorithms.
1.5 Approach
Since we started playing chess competitively over the last couple of months, we wanted to include it in our senior project. So, we decided to create Chescript, the JavaScript chess engine. We had a lot of issues initially, but we took our time (a year) and we were able to reach this final increment. We had little to no help working on this project, and we are proud of what we achieved. 
Chapter 2: Background
In chapter 2, we indicate the users of this system and their responsibilities, the impact of the system and some requirements.

2.1 User Summary and Competition
2.3.1 User Summary
 This system can be used by:
•	Any user with a JavaScript enabled browser.
Table 2.1: User Summary
Name	Description	Responsibilities
Chess Players	People who enjoy playing classical chess (no time constraints)	
-	Register / Login
-	Play the game

Chess Analysists	People who want to analyze a certain chess move or position	-	Register / Login
-	Analyze position using Google’s console

2.3.2 Alternatives and Competition
There is obviously a lot of alternatives to our chess engine, mainly Stockfish that is open source and has access to the biggest chess databases. However, our software is very lightweight and simple to use, which makes it more accessible to the common user. Our software also has a user account system over PHP, complete with server and client-side validation. 
2.2 Ethics
We use the POST method to store all the user’s information in our database. In other words, hackers will have a hard time intercepting sensitive information.

Our website does not collect unnecessary information that has no effect on the player’s experience.
2.3 Other Requirements
2.3.1 Applicable Standards
The standards of a chess engine are simple, some of them are: No illegal moves, correct castling privileges, respect for all Draw rules (stalemate…)
The website itself is designed with bootstrap, making it very scalable for multiplatform purposes.
Validation is guaranteed to occur on the server-side, which protects the database against incorrect input.
2.3.2 System Requirements
To run this application, your browser must be JavaScript compatible.
2.3.3 Performance Requirements
The chess engine is very lightweight. The hardest difficulty setting only takes about 10 seconds to calculate the strongest move, which makes it fast and performance friendly.
 
Chapter 3: Requirements Elicitation
In this chapter, we indicate the techniques used for eliciting the requirements, the questions that were asked to the users and their statements.
3.1 Adopted Technique(s)
To elicit requirements, we studied many chess books and machine learning techniques, and asked chess players (and each other) some questions.
3.2 Questions
The following questions were asked:
-	How are we going to store the user’s information?
-	What is the algorithm that will enable our chess engine to be quick and effective, while retaining the lightweight aspect?
-	What user information should we collect?
-	Does the chess engine support all chess rules?
-	What about the chess analysis aspect?
3.3 Answers
We found these answers:
-	User information will be stored on MySQL database with the help of PHP.
-	A combination of Alpha-Beta pruning and Iterative Deepening.
-	The register page collects the name, username, email and a password.
-	The chess engine supports all chess rules with no exceptions.
-	Chess analysis is possible using Google’s console.

 
Chapter 4: Requirements and Use Case Diagram
In chapter 4, we list the functional and non-functional requirements.
4.1 Functional Requirements
Table 4.1: List of Functional Requirements
ID	Priority	Description
REQ1	2	The website must take the user into a chess game after entering the correct information (Sign up, Sign in)
REQ2	1	The system must store the user’s information in a database
REQ3	2	The system must output the evaluation of every move onto the console
4.2 Non-Functional Requirements
Table 4.2: List of Non-Functional Requirements
ID	Priority	Description
REQ4	1	The system shall be available 99.999 percent of the time.
REQ5	1	The website should use sessions to redirect the user to the home page if he is not online, to protect against unlawful access
REQ6	1	The system shall not disclose any personal information about the owner apart from their name and score
REQ7	2	The website should include proper field validation, in both JavaScript (client side) and php (server side) for added security
 
Chapter 5: Functional Requirements Specification

Figure 1: Use Case Diagram
5.1 Use Case Specification for Chescript
5.3.1 Brief Description
A user registers a new account or Logs into an existing one, both will take him to the main game. Once the game starts, the user has the option to Play (make moves), undo last move, or restart the game (start a new game). After the user makes a move, Chescript follows with a move of its own. The user can also logout once He is logged in and on the main game.
5.3.2 Actors
Actors are: User and Chescript.
5.3.3 Basic Flow of Events
1.	User registers a new account or Logs into an existing account
2.	If 1. is successful, the user is taken into the main game
3.	The user can make moves, undo last move, Restart the game or Logout
4.	Every time the user makes a move, chescript replies with a move of Its own 
5.3.4 Alternative Flows of Events
	The user inputs in the URL bar a link that he can’t access with the buttons found on the main game. In this case, Chescript will redirect him back into the game.
5.3.5 Preconditions
	The user should be logged in, in order to play the game.
5.3.6 Postconditions
The user must log out in order to leave the game.

 
Chapter 6: Domain Analysis
In this chapter, we will be showing the domain model class diagram.
6.1 Domain Model Class Diagram
 
Figure 2: Class Diagram

This is the class diagram of Chescript.  It highlights the important classes, such as Game, Gameboard, Piece and Player.

Chapter 7:  Interaction and Data Flow Diagrams
In this chapter, we will be showing the Sequence diagram and Activity diagram.
7.1 Sequence Diagrams
 
Figure 3: Sequence diagram for Login
Chescript follows a basic sequence to Log the user into his account. It is simple and self-explanatory.
 
7.3 Activity Diagram
 
Figure 4: Activity diagram for the game



Once the game starts, the user needs to make a move. If the move results in checkmate or a draw, the appropriate message will be displayed on the screen. Otherwise, the user needs to keep making moves until a checkmate or a draw occurs.












Chapter 8: User Interface Design
In this chapter, we show screenshots of the system, the user interface and some explanation about the functionality of every button.

8.1 Final UI Design
The interface was created using CSS, Bootstrap and HTML.
The name of this application is Chescript, wordplay for Chess and JavaScript.
The first page in this project is the Home page.
 
Figure 5: Home Page				
The homepage contains a navigation bar that holds 3 buttons: ABOUT, PLAY and CONTACT. Clicking any of these buttons will trigger a smooth transition (bootsrap enabled) into a different division on the page. The ABOUT and CONTACT buttons are pretty self explanatory, and the PLAY button transitions the user into the following page: 
Figure 6: Play page				
The play page is all about the REGISTER button. This button has many functions, based on the session variable in the PHP. If the user is already online (Session = true), the button will redirect him into the main game. However, if the user is not online, it will take him into the Sign-Up Page.
		
		 
Figure 7: Sign up page				
The Sign-up page is composed of an upper bar containing links to the home page and login page. Inside the main division, there’s a form with the following input fields: Full name, Username, Email, Password and Confirm Password.
Username and Email are unique, which means no other user can have a matching input.
Validation is done on 2 layers, client side (JavaScript) and server side (PHP). This will ensure that no incorrect input comes through our MySQL database. 
A successful Registration will Login the user (session = true) and take the user into the main game.
However, if the user already has an account, he can login instead. 
		 
Figure 8: Login page				
The login Page consists of the same navigation bar (Home, Signup and Login) and uses the same validation methods of the Signup page. The only difference is the 2 input fields: a shared field between username and email, and a password field.
We decided that the user should be able to login not only with his email address, but his username too, since they are both unique attributes that can only refer to one unique user.
The database will check both the username and email records and match them with the input of the user, using an “OR” statement. If the user enters the correct data in the fields, he will be taken into the main game.

 
Figure 9: Chess board				
The chess board uses recognizable icons to represent the pieces, and the light/dark square contrast is enhanced with the usage of white and brown respectively, also giving it the traditional wooden look.
			

 
Figure 10: Main game
The main game consists of the chess board, difficulty drop down list, new game button, take back (undo) button and a logout button.
The user starts the game by clicking on a piece and clicking on a legal square. The engine will evaluate the user’s move and respond according to the difficulty set by the user. If the difficulty is easy, the engine will use 1 second to find the best move, medium difficulty gives the engine 4 seconds and hard difficulty gives it 10 seconds. The more time the engine has, the deeper the depth search will be (finding the best moves).
The game ends when a checkmate or draw condition occurs. Checkmate happens when the king is in check and has no way of exiting the check, while draws can have many reasons. Chescript supports every modern chess rule, including all draw conditions.
The first draw condition, called the Stalemate, occurs when X’s king is not in check and X has no other legal moves. 
The second draw condition, the threefold repetition, occurs when the position occurs three times in a row.
The last draw condition, the fifty-move rule, occurs when the last 50 moves have no captures or no pawn moves.


  
Figure 11: The Ruy Lopez variation				
This is a well-known chess position called the Ruy Lopez, the chess engine’s favorite variation against white’s e2 to e4.


Chapter 9: Coding and Testing 
Chapter 9 includes samples of code from the application.
9.1 Algorithms
10.1.1 Validation Code
Figure 12: JavaScript Login validation
			

Figure 13: PHP validation code				
Chescript supports both Server side and client-side validation, using PHP and JavaScript respectively. The above code shows how the process works, along with the error messages displayed in case an error occurs. There are many possible error messages, such as incorrect emails, invalid characters, incorrect length for certain input fields, and even duplicate errors (If the user is trying to register with an email or username another user already registered with).


10.1.2 Machine Learning

Figure 14: Chescript using machine learning, as shown in the console
	   

Inside “Js/Search.Js”, lies the code that evaluates the position and finds the best move in a specific time and depth, using a combination of two machine learning methods: Alpha-Beta Pruning and Iterative Deepening. 
Note that any user can use Chrome’s console to check what the best moves, ordering etc.… are and analyze the position. This makes Chescript a great chess learning tool.

 
Figure 15: Important Definitions
		 

Before we explain how everything works, we must first introduce the important definitions.
Search Controller is a structure that holds 9 objects, each of them is an important factor in finding the best move for the engine.
“Nodes” is the number of positions the program visits during the search, including non-leaf-nodes.
“Fh” and “Fhf”, short for fail high and fail high first respectively, will be used to determine the number of Beta cutoffs (pruning). For example, later in the code we will use “Fhf” divided by “Fh” to check the percentage of how often we got Beta cutoff on the first move (this will lead to a very efficient heuristic).  In other words, they will be used to give a percentage to show how good our move ordering is inside the function they will be in.
“Depth” is maxed at 64, and time will limit our engine while searching (will be useful later).
“Start” is used to hold the time value when the engine starts searching, and “Stop” checks when the engine exceeds the allocated time. 
Last but not least, “Best” keeps track of the best move from the last completed depth in the search, and “Thinking” is a Boolean flag that checks if the engine is searching or not.

Now that we got the main definitions out of the way, we can start explaining how Chescript implements machine learning.

 
Figure 16: Alpha-Beta algorithm		
As we previously explained, Alpha-Beta is the algorithm used by Chescript to find the best reply to the user’s moves. The code above contains function “AlphaBeta()”, that takes the two bounds alpha and beta and the depth.
We then check if depth runs out, then we return to evaluate the current position (material, position of the pieces…)
The next important piece of code is the increment of “Node”, because we just evaluated a position (called the function).
An important line of code that saves a lot of computational time is checking for repetition, and this is done by checking if the position has already been evaluated before. If it has been searched, we return 0, based on the assumption that this line was already searched and for the algorithm to return to it again and repeat it, it means we probably want a draw (not a favorable line then). We also check for the 50-move rule etc.…
After all this is done, we generate all possible moves (the “tree”) using GenerateMoves(), and introduce some important variables, most notably “oldAlpha”, which will be monitored for change. 
Figure 17: Continuation of the Alpha-Beta Algorithm

If oldAlpha = Alpha (doesn’t change value), it means our alpha never improved so we never found the best move. However, if our Alpha improves, we store this improved value in what we call a PV table (principal variation table). The reason we created PV, is the following: while searching, we might have a “best line” being searched. For example, the position searched at depth 6 is most likely the best line yet at depth 6. When we try to search at depth 7, we want our algorithm to search the best moves we found first, because most likely the depth is going to be the previous best line + the continuation. So, every time alpha cuts off (prunes), we store that move in the PV table. We will eventually reach a PV table ordered by high ordering score, which will help the algorithm massively with pruning, thus searching for less nodes.	 
The rest of the function is simply a continuation of the above logic, in typical alpha-beta algorithm fashion, as shown in figure 17.
It is worth noting that almost all chess engines use the minmax algorithm with alpha-beta pruning, since it is undoubtedly the most efficient way of traversing a move set.



 
Figure 18: Iterative deepening

The above figure shows the function SearchPosition(), which starts at the depth of 1 and runs as long as it doesn’t exceed the allocated depth and move time. We can see that the Alpha-Beta function is used within it to return a score.
The reason we used Iterative deepening is because it is faster than searching for the given depth immediately. One of the main reasons for this is the dynamic move ordering method we used, which we previously called PV. 
Another reason is how well it behaves with Alpha-Beta move orderings and for its time management strategies.








Chapter 10: Conclusions and Recommendations
10.1 Summary of the Main Results 
This project was created with the main goal of achieving a fully functional chess engine that uses pure JavaScript and artificial intelligence techniques to find the best move. We think A.I is the future, and our love for the beautiful game of chess led to this creation.
During the first few months, we faced many difficulties, mainly the GUI and the A.I algorithm itself, because we never learned how to implement such code nor design interactive websites. However, with dedication and patience, we learned all the skills needed to achieve our goal.
10.2 Main Contributions 
This senior project helped in many different ways:
•	Develop our web developments skill, specifically our knowledge in HTML, CSS, JavaScript, jQuery, PHP and Bootstrap.
•	Enhance our knowledge of machine learning, by implementing numerous algorithms like minmax, alpha-beta pruning, iterative deepening…
•	Finally, since this project was built from scratch by two students, one taking active courses on campus and the other working a job in Beirut, we learned how to divide our work, synchronize and implement accordingly. This gave us our first real experience in software engineering and teamwork.
10.3 Possible Extensions and Future Work
Due to time limitation and other constraints, some features were not implemented. Some of the additions that will be added in future updates are: A score system, Ability to play as Black, Better U.I for difficulty settings, a FEN input system.

Note that most of these features are already implemented in our code, either in partial or fully functional form. The reason they didn’t make it to the final release is we haven’t had enough time to unit test them.

 
Figure 20: Commented code for the score system


Appendix A: Presentation




















 








































Appendix B: Code Samples

	 


The above figure showcases the object-oriented approach we went with during Chescript’s coding cycle. Every variable, value or attribute can be found in some shape or form in this “Js/Defs.Js”
Note the “START_FEN” variable. FEN stands for Forsyth–Edwards Notation, and it is a way of describing a particular position of a chess game. Our code includes this feature, but we left it out of the final version because of insufficient testing. 

Figure 21: Evaluation table

In order to explain Figure 21, let’s discuss the first table. 
PawnTable’s 1st and 8th value represent A1 and H1 respectively. In other words, every line represents a rank.
Notice how the pawns get -10 when they are on their start squares, but +20 when they start to advance (To encourage the program to advance his pawns into the center).
Another interesting note is how the table discourages the engine to advance the A and H pawns, since they do not fight for the center thus rendering them weak.


Figure 22: Draw conditions
As previously mentioned, Chescript supports all three draw conditions. Once one of these conditions is met, the game will end and will display the appropriate message.



 
Figure 23: PrintBoard() Function

The PrintBoard() function allows a chess analyst to view the output of everything going on in the game, including depth and best moves. In order to view the output, the user must use Chrome’s console.




Figure 24: GUI
This piece of code is responsible in drawing the Graphical user interface. It is found in “Js/GUI.Js”.
