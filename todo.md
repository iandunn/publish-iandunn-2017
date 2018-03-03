### High

* add styles for <aside> inside a post, for TL;DRs
	* use them a lot but it'd be nice to format them to the side in a box, or even at the top, but some kind of visual separator
	* want it to look different than the kind of aside in post about customizing plugins, though. maybe <aside> isn't semantic for TLDR? 
		maybe that should be a <section class="tldr"> or something? wanna avoid something i'd have to manually put in markup, but i guess have to do that no matter way. 
		could add gutenberg block though
	* https://iandunn.name/wordpress/wp-admin/post.php?post=2201&action=edit
* add styles for asides
	* like https://iandunn.name/2014/01/10/the-right-way-to-customize-a-wordpress-plugin/ and https://iandunn.name/wordpress/wp-admin/post.php?post=2288&action=edit
	* make sure that post is using <aside>

* add styles for post titles w/ <code>
    then change existing posts to use <code> (assuming it looks good)

	https://iandunn.name/2017/03/18/wp_widget-form-returns-a-value/
	https://iandunn.name/2017/03/06/restoring-lost-commits-after-a-failed-git-svn-dcommit/
	might also want to convert <code> to backticks in rss, but low priority

* styles for nested lists have too much margin-top
	* https://iandunn.name/?p=2201&preview=true

* improve pingback styles
	* https://iandunn.name/2014/01/10/the-right-way-to-customize-a-wordpress-plugin/
	* group at the bottom instead of inline with comments
	* maybe just bulleted list

* if comment is held for moderation, still show it for that user
	too much work to do permenantly (b/c cookie, nonces, etc)
	but maybe not too hard to display right after they submit, so they at least have some fucking feedback

* tablet view too wide, hard to read content when lines are that long.
	* put a max-width on content area, but still want the content area centered

* footer email subscribe font too small
	when tried to set `font-size: 1.2em` it just overflows container



### Medium

* disable parent theme javascript and rewrite in native js. will be 1k instead of 115k b/c don't need jquery.
	* this might be useful: https://10up.github.io/wp-component-library/component/responsive-navigation/index.html
* add something to visually separate comments from each other. maybe alternating bg color?



### Low

* entry meta
	* move date to just below post title, because very important to determine if relevant to user
	* title should be link to the post on single view
	* change "bookmark the permalink" to just "permalink"
	* remove "by ian dunn" b/c all posts are
	* tags/cats on new line
	* When showing a list of categories/tags, do "X, Y, and Z" instead of "X, Y, Z"
	* Remove "Leave a a comment" link from excerpt template. People don't need encouragement to comment before reading the article...

* highlight .bypostauthor in some way? maybe same bgcolor as sticky posts?

* logged in as iandunn - only iandunn should be link

* archives page - maybe hide tags with less than X posts on mobile?
