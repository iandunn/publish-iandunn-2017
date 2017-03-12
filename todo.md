### High

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
