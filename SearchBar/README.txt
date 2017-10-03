A Pen created at CodePen.io. You can find this one at https://codepen.io/gzabrisk/pen/rLBwk.

 Search bar + dropdown. The goal was to create a search bar that could adjust in size by changing as little CSS as possible for each size. In this case, changing the font-size on the text input will cause the rest of the search box (button, dropdown, etc... to resize with it). It also helps to adjust the width of search bar itself as you increase the font-size of the input to get a balanced look.

I designed this for the old Harold B. Lee Library website (see http://old.lib.byu.edu/). We had a lot of search bars across the site and we wanted a way to add them and change their size without having to much extra CSS to any given instance. 

Please note: This affect could be accomplished with much less Javascript if I were to use flex-box (which is what we do on the new Harold B. Lee Library website, http://lib.byu.edu/). However, flex-box was not supported at the time I created this. It also represents a great alternative if your site cannot use flex-box yet for compatability or other reasons.

Also note: The dropdowns all respond together because the Javascript is written to accommodate just one search box per page. This may not be optimal, but it worked for us at the time.