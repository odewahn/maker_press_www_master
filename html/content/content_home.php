<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
    "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="generator" content="AsciiDoc 8.6.3" />
<title></title>
<link rel="stylesheet" href="/opt/local/etc/asciidoc/stylesheets/xhtml11.css" type="text/css" />
<script type="text/javascript">
/*<![CDATA[*/
window.onload = function(){asciidoc.footnotes();}
/*]]>*/
</script>
<script type="text/javascript" src="./asciidoc-xhtml11.js"></script>
</head>
<body class="article">
<div id="header">
</div>
<div id="content">
<div class="paragraph"><p><span class="image">
<img src="banner.png" style="width:90%" alt="scaledwidth=90%" />
</span></p></div>
<div class="paragraph"><p>This is a pilot for an experimental way to develop short-form (less than 100 pages or so) content for O&#8217;Reilly.  Here&#8217;s how it works:</p></div>
<div class="olist arabic"><ol class="arabic">
<li>
<p>
We supply you with a <a href="https://github.com/github/gollum">Gollum</a> instance, the awesome, git-powered wiki from the folks at <a href="http://www.github.com">GitHub</a>.  You write your document like you would with a wiki, so that you can share it with friends, editors, and other people you think might help.  Gollum takes care of version control, revision comparisons, presentation, and so forth.  Precious!
</p>
</li>
<li>
<p>
You mark up your text using AsciiDoc, a wiki-like markup format developed by <a href="http://www.methods.co.nz/asciidoc/">Stuart Rackham</a>.  Every time you save a page, it gets logged into a git repository, so it&#8217;s always under version control.  (We can grant you access to your repo&#8201;&#8212;&#8201;just ask!)
</p>
</li>
<li>
<p>
You enter the text into your Gollum wiki.  You can either type the your stuff right into the wiki, of write in a text editor and just paste it in.  We don&#8217;t care.  (But, if you&#8217;re sharing your stuff with others, you should probably use the wiki!)
</p>
</li>
<li>
<p>
When you&#8217;re ready, we suck the AsciiDoc into our publishing toolchain, convert it to DocBook (our native format), and then push it out through various channels.  You can read a bit about this at <a href="http://www.apeth.net/matt/iosbooktoolchain.html">Matt Neuberg&#8217;s blog</a>, where he describes how he wrote his "Programming iOS" book.
</p>
</li>
</ol></div>
<div class="paragraph"><p>So, why bother with this, you ask?  Mostly, we&#8217;re trying to create a friendly process that will let you get you writing and us publishing as quickly as possible.  The cool thing about AsciiDoc, Gollum, and git (and github!) is that they help hide away a lot of the complexities of the publishing process, letting you (hopefully!) focus on the what you want to say.</p></div>
<div class="paragraph"><p>Here&#8217;s what you&#8217;ll need to know to write in this system:</p></div>
<div class="ulist"><ul>
<li>
<p>
Basic AsciiDoc formatting.  This section introduces some of the basic formatting commands.  Hopefully, this will cover about 80% of what you'
ll do on a daily basis.
</p>
</li>
<li>
<p>
How to add attachments.  This section covers how to add external resources, such as figures and code examples.  It&#8217;s pretty simple, really. You just upload the images, register them in the repo, and then add a link to them in your text.
</p>
</li>
<li>
<p>
How to structure your overall document.  This section covers how to tie all the pieces together into a coherent structure.
</p>
</li>
<li>
<p>
Various tips and tricks.  These are some useful things you should need to know and remember.
</p>
</li>
</ul></div>
<div class="sect1">
<h2 id="_creating_a_page_in_asciidoc">Creating a page in AsciiDoc</h2>
<div class="sectionbody">
<div class="paragraph"><p><a href="http://www.methods.co.nz/asciidoc/index.html">AsciiDoc</a> is a text document format for writing books, ebooks, documentation, ebooks, and other documents. TIt&#8217;s similar to wiki markup&#8201;&#8212;&#8201;if you can write a wikipedia article, then you&#8217;re pretty much 90% of the way there.  This <a href="http://powerman.name/doc/asciidoc">Asciidoc cheat sheet</a> covers a lot of the nitty gritty, but the following sections will give you an overview of the markup you&#8217;ll use most frequently.</p></div>
<div class="paragraph"><p>To create a new AsciiDoc page, click the "New Page" button and change the "Edit Mode" from "Markdown" to "AscciDoc," as show in <a href="#edit-mode">[edit-mode]</a>:</p></div>
<div class="paragraph" id="edit-mode"><div class="title">Change the "edit mode" to "AsciiDoc" when you create a new page</div><p><span class="image">
<img src="select_format.png" style="width:90%"  alt="select_format.png" />
</span></p></div>
<div class="paragraph"><p>Once you&#8217;ve created a page, you can try out the following markup:</p></div>
<div class="sect2">
<h3 id="_plain_text">Plain Text</h3>
<div class="paragraph"><p>Most of what you&#8217;ll be doing is just writing plain old text. There&#8217;s nothing special here&#8201;&#8212;&#8201;just write what you have to say.  The only thing to remember is to NOT use any inline formatting&#8201;&#8212;&#8201;like bold, italic, or others.  Here&#8217;s an example:</p></div>
<div class="listingblock">
<div class="content">
<pre><tt>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean magna ante,
vulputate nec pellentesque ut, vehicula sed tellus. Donec nibh ligula, malesuada
at posuere eget, pellentesque non lectus. Suspendisse malesuada tempus facilisis.
Praesent sem mi, dictum at ornare a, elementum faucibus mauris. Proin tellus
turpis, sagittis ut tincidunt quis, suscipit in dolor. Maecenas ut mi mi.</tt></pre>
</div></div>
</div>
<div class="sect2">
<h3 id="_hyperlinks">Hyperlinks</h3>
<div class="paragraph"><p>To add a hyperlink, type in the URL followed by a description enclosed in brackets.  Do not put a space between the brackets and the URL.  Here&#8217;s an example:</p></div>
<div class="listingblock">
<div class="content">
<pre><tt>http://oreilly.com/[O'Reilly Media Website]
http://www.makezine.com/[Makezine]
https://github.com/odewahn/codebox2/blob/master/code/fractal_barnsley.pde[Fractal Example in Processing]</tt></pre>
</div></div>
</div>
<div class="sect2">
<h3 id="_notes_warnings">Notes / Warnings</h3>
<div class="paragraph"><p>If you need to add a note or sidebar, here&#8217;s the format:</p></div>
<div class="listingblock">
<div class="content">
<pre><tt>[NOTE]
====
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean magna ante,
vulputate nec pellentesque ut, vehicula sed tellus. Donec nibh ligula, malesuada
at posuere eget, pellentesque non lectus. Suspendisse malesuada tempus facilisis.
Praesent sem mi, dictum at ornare a, elementum faucibus mauris. Proin tellus
turpis, sagittis ut tincidunt quis, suscipit in dolor. Maecenas ut mi mi.
====</tt></pre>
</div></div>
</div>
<div class="sect2">
<h3 id="_code">Code</h3>
<div class="paragraph"><p>Enclose code samples inside 4 consecutive minus signs ("-"), like this:</p></div>
<div class="listingblock">
<div class="content">
<pre><tt> ----
     if (x &lt; X_MIN) {
        X_MIN = x;
     }
     if (x &gt; X_MAX) {
       X_MAX = x;
     }
     if (y &lt; Y_MIN) {
       Y_MIN = y;
     }
     if (y &gt; Y_MAX) {
       Y_MAX = y;
     }
 ----</tt></pre>
</div></div>
</div>
<div class="sect2">
<h3 id="_bulllet_lists">Bulllet lists</h3>
<div class="paragraph"><p>Use asterisks ("*") to create bullets.  You can indent items by using multiple asterisks:</p></div>
<div class="listingblock">
<div class="content">
<pre><tt>* Lorem ipsum dolor sit amet, consectetur adipiscing elit.
* Nulla blandit eros eget velit bibendum placerat.
** Pellentesque id justo ultrices est pharetra suscipit.
** Cras nec magna a lectus consequat varius.
* Phasellus tempor lacinia neque, et scelerisque lectus luctus id.</tt></pre>
</div></div>
<div class="paragraph"><p>The list will look like this:</p></div>
<div class="ulist"><ul>
<li>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>
</li>
<li>
<p>
Nulla blandit eros eget velit bibendum placerat.
</p>
<div class="ulist"><ul>
<li>
<p>
Pellentesque id justo ultrices est pharetra suscipit.
</p>
</li>
<li>
<p>
Cras nec magna a lectus consequat varius.
</p>
</li>
</ul></div>
</li>
<li>
<p>
Phasellus tempor lacinia neque, et scelerisque lectus luctus id.
</p>
</li>
</ul></div>
</div>
<div class="sect2">
<h3 id="_numbered_lists">Numbered lists</h3>
<div class="paragraph"><p>Use periods (".") to create a ordered (i.e., "1, 2, 3, &#8230;") lists:</p></div>
<div class="listingblock">
<div class="content">
<pre><tt>. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
.. Nulla blandit eros eget velit bibendum placerat.
.. Pellentesque id justo ultrices est pharetra suscipit.
. Cras nec magna a lectus consequat varius.
. Phasellus tempor lacinia neque, et scelerisque lectus luctus id.</tt></pre>
</div></div>
<div class="paragraph"><p>Here&#8217;s how it will look:</p></div>
<div class="olist arabic"><ol class="arabic">
<li>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
</p>
<div class="olist loweralpha"><ol class="loweralpha">
<li>
<p>
Nulla blandit eros eget velit bibendum placerat.
</p>
</li>
<li>
<p>
Pellentesque id justo ultrices est pharetra suscipit.
</p>
</li>
</ol></div>
</li>
<li>
<p>
Cras nec magna a lectus consequat varius.
</p>
</li>
<li>
<p>
Phasellus tempor lacinia neque, et scelerisque lectus luctus id.
</p>
</li>
</ol></div>
</div>
<div class="sect2">
<h3 id="_simple_tables">Simple Tables</h3>
<div class="paragraph"><p>Here&#8217;s the basic format for creating tables:</p></div>
<div class="listingblock">
<div class="content">
<pre><tt>.An example table
[width="40%",options="header"]
|=============
|col 1| col 2| col3
|1  | 2 | 3
|4  | 5 | 6
|7  | 8  | 9
|=============</tt></pre>
</div></div>
<div class="paragraph"><p>It will look like this:</p></div>
<div class="tableblock">
<table rules="all"
width="40%"
frame="border"
cellspacing="0" cellpadding="4">
<caption class="title">Table 1. An example table</caption>
<col width="33%" />
<col width="33%" />
<col width="33%" />
<thead>
<tr>
<th align="left" valign="top">col 1</th>
<th align="left" valign="top"> col 2</th>
<th align="left" valign="top"> col3</th>
</tr>
</thead>
<tbody>
<tr>
<td align="left" valign="top"><p class="table">1</p></td>
<td align="left" valign="top"><p class="table">2</p></td>
<td align="left" valign="top"><p class="table">3</p></td>
</tr>
<tr>
<td align="left" valign="top"><p class="table">4</p></td>
<td align="left" valign="top"><p class="table">5</p></td>
<td align="left" valign="top"><p class="table">6</p></td>
</tr>
<tr>
<td align="left" valign="top"><p class="table">7</p></td>
<td align="left" valign="top"><p class="table">8</p></td>
<td align="left" valign="top"><p class="table">9</p></td>
</tr>
</tbody>
</table>
</div>
</div>
<div class="sect2">
<h3 id="_cross_references">Cross references</h3>
<div class="paragraph"><p>Not sure why these aren&#8217;t working&#8201;&#8212;&#8201;need to figure it out.</p></div>
</div>
</div>
</div>
<div class="sect1">
<h2 id="_figures_and_code">Figures and Code</h2>
<div class="sectionbody">
<div class="paragraph"><p>Click on the "Attachments" link in the header to add figures or code samples.  You&#8217;ll be presented with a basic form where you can select and upload files.  Once you&#8217;ve uploaded what you want, click the "Commit Attachments to Repository" link to register them in the repo.  Once you&#8217;ve got the documents uploaded and registered, you can link to them inside your AsciiDoc source.</p></div>
<div class="paragraph"><p>For figures, the syntax is:</p></div>
<div class="listingblock">
<div class="content">
<pre><tt>image::attachment/file_name.png[scalewidth=90%]</tt></pre>
</div></div>
<div class="paragraph"><p>You can also use the AsciiDoc "include" macro to pull in code files (more on this in <a href="#figures-and-code">[figures-and-code]</a> section):</p></div>
<div class="paragraph"><p>Code is similar, except that you use the "include" macro, like this:</p></div>
<div class="listingblock">
<div class="content">
<pre><tt> ----
 include::code/example.c[]
 ----</tt></pre>
</div></div>
</div>
</div>
<div class="sect1">
<h2 id="_structuring_the_document">Structuring the document</h2>
<div class="sectionbody">
<div class="paragraph"><p>Creating more complex documents is simply a matter of sticthing together smaller sub documents.  While there are a variety of approaches, the one we&#8217;re recommending right now (this is a pilot, after all, so this might change) is to use the special file "home.asciidoc" as a granular TOC or index page.  So, basically, you put all the section headers that describe the piece&#8217;s structure, and then have links out to the content pages.  Keeping the structure in one place (home) will make it easier to move things around as you rewrite and edit.  The idea looks something like <a href="#doc-structure">[doc-structure]</a>.</p></div>
<div class="paragraph" id="doc-structure"><div class="title">Structure the overall document using headers and links</div><p><span class="image">
<img src="doc_structure.png" alt="doc_structure.png" style="width:90%" />
</span></p></div>
<div class="paragraph"><p>So, how do you do this?  Basically, just put all your structural headings (defined by nesting equal signs at various depths) in the home file, and then put internal links (which are the page name enclosed in double brackets).  Note that you don&#8217;t have to create each content page first&#8201;&#8212;&#8201;you can simply create a link the link.  When you click on it, the new page will be created automatically.  The following sample should give you the basic idea.</p></div>
<div class="listingblock">
<div class="content">
<pre><tt>= Getting Started Guide

'[[intro]]

== Chapter 1

'[[ch1-intro]]

=== Chapter 1.A

'[[ch1-a]]

=== Chapter 1.B

'[[ ch1-b]]

==== Chapter 1.B.1

'[[c1-1-b-1]]

==== Chapter 1.B.2

'[[c1-1-b-2]]

== Chapter 2

'[[ch2-intro]]

=== Chapter 2.A

'[[ch2-a]]

=== Chapter 2.B

'[[ch2-b]]</tt></pre>
</div></div>
<div class="paragraph"><p>In addition to making the document more manageable, this approach also has the benefit of helping you think through the outline and structure of the document.</p></div>
</div>
</div>
<div class="sect1">
<h2 id="_tips_and_tricks">Tips and Tricks</h2>
<div class="sectionbody">
<div class="ulist"><ul>
<li>
<p>
Write in a text editor and paste the content into the Gollum wiki
</p>
</li>
<li>
<p>
Don&#8217;t section headers inside your content sections&#8201;&#8212;&#8201;put them in the "Home" file
</p>
</li>
<li>
<p>
Don&#8217;t use inline formatting
</p>
</li>
<li>
<p>
Don&#8217;t use footnotes
</p>
</li>
<li>
<p>
Don&#8217;t  have an empty section
</p>
</li>
<li>
<p>
Don&#8217;t  start an xref with a number or character
</p>
</li>
<li>
<p>
Don&#8217;t  duplicate an xref name
</p>
</li>
</ul></div>
</div>
</div>
</div>
<div id="footnotes"><hr /></div>
<div id="footer">
<div id="footer-text">
Last updated 2011-04-27 22:06:26 PDT
</div>
</div>
</body>
</html>

