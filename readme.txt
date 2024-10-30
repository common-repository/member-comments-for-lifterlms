=== Plugin Name ===
Contributors: dennishall
Donate link: http://learning-templates.com/index.php/product/lifterlms-member-comments/
Tags: comments, membership, group, lifterlms, stable
Requires at least: 4.3
Tested up to: 4.7
Stable tag: 2.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

LifterLMS Member Comments

== Description ==

LifterLMS Member Comments filters comments by Membership Group. Activating this plugin will pick up the WordPress Discussion settings and the LifterLMS Membership restrictions and combine them to filter user comments by Membership group in LifterLMS Courses, Lessons and Quizzes.

If this plugin interests you, check out our LifterLMS xAPI plugin at https://lifterlms.com/product/lifterlms-xapi/ to report your uploaded e-learning, add competence management and xAPI reporting to LifterLMS.

== Installation ==

If you have not added this plugin from the WordPress repository, but rather form a downloaded version, assuming you have saved this ZIP file to your desktop...
<ul>
<ol>1. Navigate to your WordPress Plugins > Add New</ol>
<ol>2. Click on the upload Plugin button located in the top left corner of the page</ol>
<ol>3. Browse to your desktop and select the Member-Comments-for-LifterLMS.zip file</ol>
<ol>4. Click on the Install Now button</ol>
<ol>5. Click on the Activate Plugin link</ol>
</ul>
To configure this plugin:
<ul>
<ol>1. In WP-Admin > Settings > Discussion, scroll down to the "Email me whenever" section and adjust your settings (this area only sets up the emails sent to the site administrator)</ol>
<ol>2. Scroll down to the next item "Before a comment appears" to configure your comment moderation rules,
<ul>
<li>"Comment must be manually approved" means only the user who commented will see the comment until a Group Leader or administrator approves it</li>
<li>Comments are approved in WP-Admin Comments</li>
<li>"Comment author must have a previously approved comment" is somewhat meaningless in this setup, but it should be checked to be sure other web pages in your site do not get spammed if you allow comments in them</li>
</ul>
</ol>
<ol>3. While editing each LifterLMS post type (i.e. course lesson, quiz) that you want to allow people to comment in, scroll down to see the
Discussion section of the post
<ul>
<li>If you do not see a discussion section, click "Screen Options in the upper-right and check the box for it</li>
<li>To enable comments per post, check the 'Allow comments" checkbox in the Discussion panel and Update the post</li>
</ul>
</ol>
</ul>
== Frequently Asked Questions ==

Does this plugin work with any 3rd. party group or membership plugins?

No. This plugin is designed to work with the native LifterLMS Memberships.
To have it work with a 3rd. party Group or membership plugin would completely make no sense as it was created to focus your efforts in the native LifterLMS management tools while also having your students remain in your course to discuss things with other group members.

== Changelog ==

= 1.0 =
* Initial public release.

== Upgrade Notice ==

* If you would like to have other custom LifterLMS plugins or site customizations done, feel free to contact me.

== Screenshots ==

1. Locate the WP-Admin Settings > Discussion options page.
/assets/screenshot-1.png

2. Locate and chaneg the comments options per the instructions found in the Installation section.
/assets/screenshot-2.png

3. After configuring your WP Admin > Settings > Discussion settings, simply check the Allow Comments checkbox to turn it on for each course, lesson or quiz post.
/assets/screenshot-3.png

== Other Notes ==

This plugin is provided for free in hopes you will not install other plugins just so you can have group comments per post in LifterLMS.
The idea here is that "if" all you want is to have private comments that only members in the membership can see, you will not need to:
<ul>
<li>Install bbPress or BuddyPress</li>
<li>Duplicate your courses</li>
<li>Leave a course (as a student) to discuss the current course, lesson or quiz - It just makes sense to discuss the area you are currently in</li>
</ul>
And you will be able to:
<ul>
<li>Stay in LifterLMS to manage your users and their activities rather than jump around and duplicate your user management work</li>
<li>Discuss the current course, lesson or quiz the area you are discussing</li>
</ul>
If like this plugin, please rate it.

If you need custom LifterLMS, LearnDash, WordPress or other LMS work performed, please contact me through my http://learning-templates.com website.