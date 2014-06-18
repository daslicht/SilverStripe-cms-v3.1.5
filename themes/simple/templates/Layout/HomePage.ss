<%-- <% include SideBar %> --%>
<div class="content-container unit size3of4 lastUnit">
	<article>
		<div id="Banner">
		  <img src="http://www.silverstripe.org/themes/silverstripe/images/sslogo.png" alt="Homepage image" />
		</div>
		<div id="BrowserPoll">
		    <h2>Browser Poll</h2>
		    <% if $BrowserPollForm %>
		        $BrowserPollForm
		    <% else %>
		    <ul>
		        <% loop $BrowserPollResults %>
		        <li>
		            <div class="browser">$Browser: $Percentage%</div>
		            <div class="bar" style="width:$Percentage%">&nbsp;</div>
		        </li>
		        <% end_loop %>
		    </ul>
		    <% end_if %>
		</div>
		<div class="Content">
		<div class="content">$Content</div>
	</article>
	<% loop $LatestNews %>
		<% include ArticleTeaser %>
	<% end_loop %>
	$rss
</div>