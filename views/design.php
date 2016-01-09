<div class="text">
    <p>
I used the distribution code from C$50 Finance as the foundation for my website.
Originally, my website was intended to take feedback from the HUDS website, where there
is a form similar to my "New Comment" page, and then collect and analyze it. To simulate
this, I planned on passing in comments and their associated information with CSV files.
After coding for all of this (see getcommentscsv_old.php), I realized that I could simply have a comment form on
my website, and the result was the "New Comment" tab.
    </p>
    
    <p>
Therefore, if my website it to be used separately from the HUDS website, the next
step would be to add user logins and distinguish between managers and other users.
As it is, the New Comment tab's main function is to provide data for the other features
to manipulate. The elements in my form are adapted from the HUDS form at 
http://www.dining.harvard.edu/campus-dining/undergraduate-dining/how-did-we-do
    </p>
    
    <p>
One of these features is the ability for managers to read comments and reply to them
all in one place. In the current HUDS system, a mass email is sent to all the managers
whenever a comment comes in, and managers have to proceed from there on their own. In
building this feature, I learned that Cloud9 doesn't support email, so I found a workaround
in Mailgun.
    </p>
    
    <p>
Designing the Analysis feature was the hardest part. I had to figure out a relatively efficient
way to parse comments and determine their basic subject matter (food, service) as well
as their general sentiment. I decided to do this by building libraries of positive,
negative, food-related, and service-related foods, which I could then check against
the comments. I decided to build the libraries from scratch because the content of HUDS
comments is very specific. As I work for HUDS Marketing, I have lots of exposure to the
type of language used and the most common words. To help determine what words should go
in which libraries, I consulted my friend Philip Tsien, who is taking a linguistics
class at Georgetown University.
    </p>
    
    <p>
On the algorithm end, I exploded each comment into an array (after filtering out punctuation
and leading and trailing whitespace). I then paired each comment array with a tracking array,
with 1 term in the tracking array for each word in the comment. To compare the libraries with
the comments, I adapted the php version of dictionary.c found in the Week 7 lecture. I had to
modify my check to specify the library because in analysis.php, I have several libraries open
at once. (This caused me quite a few problems before I caught it-- once a word had one hit,
all the libraries following it were then false hits.)
    </p>

    <p>
Once the whole comment was successfully "tagged", I also had to check for misleading positives,
per the "deceptive" library. Finally, I check up to 3 terms before and 3 terms after each
positive or negative hit in order to determine if the positive or negative regarded food or
service.
    </p>
    
    <p>
In terms of SQL, I needed two tables: one for the comments and one for the locations.
Any time I displayed comments or retreived user information, I called the comment table.
I called the locations table to store the results of my analysis.
    </p>

</div>
