# teddy
https://teddyletsplay.000webhostapp.com/ <br />
An online gaming site. <br />
Play tic-tac-toe against a bot that can't be defeated.<br />
A global dynamic leaderboard.<br />

## How I have developed this?
In Tic-Tac-Toe game, total 9 entries will be made by both users. 5 by user, 4 by robot. So, <b>whole game has to be played on client side to lower the load of server</b>. So, I have developed script in JavaScript. Means, whole game logic is on client side. No requests will be generated every time when user makes a move on the board. <br/><br/>
<b>MiniMax</b> algorithm is used for this game. Which makes this bot unbeatable.<br/><br/>
CSS and Bootstrap are used for front end, PHP for back end, JavaScript and jQuery for Game.<br/>

## Dynamic Leaderboard
The Leaderboard page contains all the usernames and their scores in descending order. Everytime a user finishes a game, leaderboard will be updated. At that time, any other user may also be playing the game, and his/her rank also may be changed. That change will be shown in my device. (In short, leaderboard is updated instantly after the game played by any user.)

<b>Play & Enjoy...</b>
