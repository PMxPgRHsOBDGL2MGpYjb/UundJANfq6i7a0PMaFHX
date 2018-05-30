#The contest manager
##Preamble
The contest manager is a tiny web app which will allow customers of a certain brand to register to a contest using their order ID and enter the chance to win one prize.

The prize can be chosen from a list of prizes

The registration with a valid order ID will get the customer n chances

The customer will be able to do extra actions for extra chances

When the contest closes there winner will be drawn using random.org after a specified number of days (to avoid returns)


##Design
The wireframes are located at:
1. The main contest page (registration and details): https://wireframe.cc/9qEioH
2. The joined page: https://wireframe.cc/9qEioH
3. There will be three more pages containing texts:
    1. Privacy policy
    2. Terms and conditions
    3. Rules

The design should be clean, intuitive, modern and *responsive*

The images can be on white or even transparent background

The design must include success, error and info style messages

The design must be built with a css framework in mind (eg. Bootstrap) to avoid complications when converting to HTML


##Frontend Functionality
1. The main contest page
    1. Will be displayed if no login cookie is presend
    2. Loging cookie is the actual order ID
    3. If the Order ID is valid (calls an api, always valid for dev puproses) and a prize is chosen then
        1. If the order id is in the database the cookie is set
            1. Redirect to the registered page
        2. If not exists in db we save the order id to the database giving n points for valid order id
            1. Redirect to the registered page
2. The registered page
    1. See current points
    2. See chosen prize
    3. Change prize
    4. Actions for more points
        1. Connect with Amazon
            1. x points
        2. Connect on FB Messenger
            1. y points
        3. Share to Facebook
            1. z points
        4. Send to friends
            1. k points for each request sent
            2. i points for each registered friend
    4. Countdown until contest is over

Pages containing text will be present for
1. Rules
2. Terms and Conditions
3. Privacy policy

Logic for the frontend functionality
![](LogicMaps/contest_page_flow.png)
##Backend Functionality
