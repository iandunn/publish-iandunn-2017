### High

* The Links page is blank now that it doesn't have a template. Set to draft/delete? Add content via `the_content` ?
* Align the comment input fields. Can flexbox do this? If not probably just use a table
* Evenly distribute the space between footer separator and the widgets on each side.
	* Flexbox might be able to do it properly, or maybe just fake it with padding/margin since it'll always be fixed



### Medium

* The link to reply to an individual comment needs more `margin-top`
* `code a` vs `a code` - the link colors are different. The blue is probably better
* keep both new_wp_trim_excerpt() and the bit in show_excerpts() ?
* disable parent theme javascript and rewrite in native js. will be 1k instead of 115k b/c don't need jquery.
* add something to visually separate comments from each other. maybe alternating bg color?



### Low

* entry meta
	* move date to just below post title, because very important to determine if relevant to user
	* title should be link to the post on single view
	* change "bookmark the permalink" to just "permalink"
	* remove "by ian dunn" b/c all posts are
	* tags/cats on new line

* highlight .bypostauthor in some way? maybe same bgcolor as sticky posts?

* logged in as iandunn - only iandunn should be link

* archives page - maybe hide tags with less than X posts on mobile?
