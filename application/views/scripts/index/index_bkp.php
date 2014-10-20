<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=8">
<title>Mutual of Omaha Life Insurance, Disability Insurance &amp; More</title>
<meta name="description" content="Mutual of Omaha is a leading provider of life insurance, Medicare supplement insurance, disability insurance products and annuities. Visit today.">
<meta name="keywords" content="life insurance, life insurance company">
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/print.css" media="print">
<link rel="stylesheet" type="text/css" href="css/ad-carousel.css">
<link rel="stylesheet" type="text/css" href="css/home.css"><!--[if lte IE 7]><link rel="stylesheet" href="http://www.mutualofomaha.com/css/ie.css" type="text/css" /><![endif]-->
<style>
#cssmenu,
#cssmenu ul,
#cssmenu ul li,
#cssmenu ul li a,
#cssmenu #menu-button {
  margin: 0;
  padding: 0;
  border: 0;
  list-style: none;
  line-height: 1;
  display: block;
  position: relative;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
#cssmenu:after,
#cssmenu > ul:after {
  content: ".";
  display: block;
  clear: both;
  visibility: hidden;
  line-height: 0;
  height: 0;
}
#cssmenu #menu-button {
  display: none;
}
#cssmenu {
  width: auto;
  border-radius: 4px;
  font-family: 'Source Sans Pro', sans-serif;
  line-height: 1;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.15), inset 0 -2px 0px #ffffff, inset 0 1px 0 #ffffff;
}
#cssmenu > ul > li {
  float: left;
}
#cssmenu.align-center > ul {
  font-size: 0;
  text-align: center;
}
#cssmenu.align-center > ul > li {
  display: inline-block;
  float: none;
}
#cssmenu.align-right > ul > li {
  float: right;
}
#cssmenu > ul > li > a {
  padding: 20px 25px 21px 25px;
  font-size: 15px;
  color: #ffffff;
  -webkit-transition: all .2s ease;
  -moz-transition: all .2s ease;
  -ms-transition: all .2s ease;
  -o-transition: all .2s ease;
  transition: all .2s ease;
}
</style>

<!--img src="http://localhost/webapp/images/MOOM_web.fw.png" style="width: 100%; height: 100%;" /-->

<body id="homepage">


<div id="wrapper">
<div id="header" bgcolor="#000000">
	<div id="logo" class="" >
		<span>Mutual of Omaha</span>
		<!--img src="images/pixel.gif" alt="" title="Mutual of Omaha" border="0" height="52" width="233"-->
	</div> 
	<a href="#">
	<div id="utilities">
		<!--img src="images/pixel.gif" alt="Mutual of Omaha" title="" border="0"-->
		<!--div class="links">
			<ul id="find-links" class="displayNone">
				<li><strong>Find</strong></li>
				<li class="forms"><a href="#" rel="find-modal"><span>Forms</span></a></li>
			</ul>
			<noscript>
				<ul>
					<li><strong>Find</strong></li>
					<li class="forms"><a href="http://www.mutualofomaha.com/customer-service/#forms"><span>Forms</span></a></li>
				</ul>
			</noscript>
		</div--> 	
	</div>
	</a>
</div> 

<div id="content-wrapper">
	<div id="nav-html">
		<div id='cssmenu'>
			<ul>
			   <li class='active'><a href='#'>Home</a></li>
			   <li><a href='#'>Products</a></li>
			   <li><a href='#'>Company</a></li>
			   <li><a href='#'>Contact</a></li>
			</ul>
		</div>
	<!--ul>
		<li id="menu-button" ><a href="http://www.mutualofomaha.com/"><span></span></a></li>
	</ul-->
	</div>
	<div id="banner">
<div id="login">
	<ul class="dropdown-menu">
		<!-- dropdown menu links -->
		<li><a href="#" class="individualCustomer">Individual Customers</a></li>
	</ul>
	<div class="header" style="display: none;">
		<span> Access Your Account</span>
		<div class="account-dropdown">
			<b class="caret"></b>
			<h2>Individual Customers</h2>
		</div>
	</div>
	<noscript>
		<div class="header">
			<h2>Access Your Account</h2>
		</div>
	</noscript>
	
	<!-- <form action="javascript:void(0);">
		I am 
		<select id="customerLoginSelect">
			<option value="individualCustomer">an Individual Customer</option>
			<option value="salesProfessional">a Sales Professional</option>
			<option value="planAdministrator">a Plan Administrator</option>
			<option value="provider">a Provider</option>
			<option value="retirementServices">a Retirement Plan Customer</option>
		</select>
	</form> //-->
	<script type="text/template" id="provideFormTemplate">
		<form name="customerLoginForm" id="customerLoginForm" method="post" action="{{action}}">
			<table>
				<tr>
					<td>Tax Identification Number</td>
				</tr>
				<tr>
					<td><input type="text" name="tin" maxlength="10" size="12" value="" id="tin"></td>
				</tr>
				<tr>
					<td><div class="button-box"><input type="checkbox" name="terms" value="on" id="terms" style="width:25px; border:none; float:left;" /><div style="margin-top:8px; float:left;">I agree to the <a href="#" id="termsPop" rel="provider">terms and conditions</a></div></div></td>
				</tr>
				<tr>
					<td><input type="submit" value=" " id="sign-in" class="btn">
				</tr>
			</table>
		</form>
	</script>
	<script type="text/template" id="accountsTemplate">
		<form name="accountsForm" id="accountsForm">
			<div id="action">
				<a href="{{accounts}}" id="accountsURL" class="btn large" style="width: 100%; text-align: center;"><span>Sign In</span></a>
							</div>
					</form>
	</script>
	<script type="text/template" id="retirementFormTemplate">
		<div class="btn-container">
			<p>Select your login type:</p>
			<ul>
				<li><a href="https://myaccount.ascensus.com/mutual" class="retirement-participant">Participant</a></li>
				<li><a href="https://www.sponsorinsight.com/mutual/index.cfm" class="retirement-sponsor">Sponsor</a></li>
				<li><a href="https://www8.mutualofomaha.com/enterprise/myportal/customer/FOCLpoint" class="retirement-foclpoint">FOCLPoint</a></li>
				<li><a href="https://www.sponsorinsight.com/mutual/index.cfm" class="last retirement-advisor">Advisor</a></li>
			</ul>
		</div>
	</script>
	<div id="form-container" style="display:none;">
		<form name="customerLoginForm" id="customerLoginForm" action="https://www3.mutualofomaha.com/indcustomer/servlet/CustomerLoginServlet" method="post">
			<table>
				<tbody><tr>
					<td><label for="username">Username</label></td>
					<td><label for="password">Password</label></td>
				</tr>
				<tr>
					<td style="padding-right:7px;"><input name="userid" id="userid" maxlength="14" tabindex="2" type="text"></td>
					<td><input name="password" id="password" maxlength="14" tabindex="3" type="password"></td>
				</tr>
			</tbody></table>
			<div id="action">
				<input value="" class="btn" id="sign-in" type="submit">
				<div id="register">&nbsp;&nbsp;or&nbsp;&nbsp;<a href="http://www.mutualofomaha.com/customer-service/register.php"><strong>Register</strong></a></div>
			</div>
			<div id="login-assist">Forgot <a href="https://www3.mutualofomaha.com/indcustomer/servlet/CustomerForgottenUserIdServlet" rel="nofollow" class="username-reset">Username</a> or <a href="https://www3.mutualofomaha.com/indcustomer/servlet/CustomerForgottenPasswordServlet" rel="nofollow" class="password-reset">Password</a>?</div>
            
            <div class="plan-members-login display-none">
            	<a href="http://www.mutualofomaha.com/customer-service/?ref=qlinks&amp;policyholder_type=group-member&amp;src=home-login">I have coverage through my employer</a>
            </div>
		</form>
	</div>
	<div class="salesProfessionalLinks" style="display:none;">
		<hr style="margin:0 0 2px 0">
		<div id="subaction"><a href="http://www.mutualofomaha.com/sales-professionals/?src=home-login">Agents and Brokers</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="Agents and Brokers" style="height:9px;"></div>
	</div>
	
	<noscript>
		<div class="btn-container">
			<p>Select your login type:</p>
			<ul>
				<li><a href="https://www3.mutualofomaha.com/indcustomer/servlet/CustomerLoginServlet">Individual Customers</a></li>
				<li><a href="https://www8.mutualofomaha.com/enterprise/portal/producer/">Sales Professionals</a></li>
				<li><a href="https://www3.mutualofomaha.com/groupwebreports/servlet/GBSReportLoginServlet">Plan Administrators</a></li>
				<li><a href="https://www31.mutualofomaha.com/ProviderAccess/verifyTin.do">Providers</a></li>
				<li><a href="http://www.getretirementright.com/?ref=loginbox&" class="last">Retirement Plans</a></li>
			</ul>
		</div>
	</noscript>
		</div>		<div id="ad-carousel">
	<div id="ad-carousel-tab-arrow" class="tab-1-arrow-position"></div>
	<div id="ads">
			<div class="ad">
				<div class="ad-image"><a href="http://www.mutualofomaha.com/medicare-supplement-insurance/learn/medicare-resources/?src=ad-home-2tabshome-1" target="_self"><img src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/2tabs-medsupp-1.jpg" alt="Medicare Supplement" title="Medicare Supplement" border="0" height="238" width="439"></a></div>
				<a href="http://www.mutualofomaha.com/medicare-supplement-insurance/learn/medicare-resources/?src=ad-home-2tabshome-1" target="_self"><span class="clickme"></span></a>
				<div class="ad-content">
										<p style="left:-100px; top:-100px; font-size: 23px; color: #ffefa9;" class="ad-headline-1"></p>
										<a href="http://www.mutualofomaha.com/medicare-supplement-insurance/learn/medicare-resources/?src=ad-home-2tabshome-1" class="btn blue get-a-quote" style="left:49px;top:160px;" target="_self"><span></span></a>
				</div>
			</div>
								<div class="ad" style="display:none">
				<div class="ad-image"><a href="http://www.whatsmyneed.com/?src=ad-home-2tabshome-2" target="_blank"><img src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/2tabs-life.jpg" alt="Life Insurance" title="Life Insurance" border="0" height="238" width="439"></a></div>
				<a href="http://www.whatsmyneed.com/?src=ad-home-2tabshome-2" target="_blank"><span class="clickme"></span></a>
				<div class="ad-content">
										<p style="left:-100px; top:-100px; font-size: 23px; color: #ffefa9;" class="ad-headline-1"></p>
										<a href="http://www.whatsmyneed.com/?src=ad-home-2tabshome-2" class="btn blue get-a-quote" style="left:49px;top:160px;" target="_blank"><span></span></a>
				</div>
			</div>
				</div>

		<div class="tld">
		<span><a href="https://www.mutualofomaha-lifeinsurance.com/?utm_source=Direct&amp;utm_medium=TV&amp;utm_campaign=CZ22&amp;keyline=522200021" class="tld-link" target="_blank"></a></span>
	</div> 
	
	<ul id="ad-carousel-tabs">
				<li class="display-none"><a href="http://www.mutualofomaha.com/medicare-supplement-insurance/learn/medicare-resources/?src=ad-home-2tabshome-1" class="tab-1" target="_self"><strong>Medicare Supplement</strong><span>Coverage for two people fit your needs and budget.</span></a></li>
				<li class="display-none"><a href="http://www.whatsmyneed.com/?src=ad-home-2tabshome-2" class="tab-2" target="_blank"><strong>Life Insurance</strong><span>Build a plan that fits your unique situation.</span></a></li>
			</ul>
</div>
	</div>
		<div id="content">
		<div class="sidebar-home">
			<style>
	input.invalid { 
		background-color: #FCF7DF !important;
		border-color: #EDC827 !important;
	}
</style>
<script type="text/javascript" language="JavaScript" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/validation.js"></script>
<ul class="accordion">
	<li class="accordion-tab">
		<h2><a href="#"><span>Get a Quote</span></a></h2>
		<div class="tab-content">
			<p>Find out how affordable our products can be with a <strong>free quote</strong>.</p>
			<hr>
			<form id="quote-accordion" action="#" method="post">
				<table cellpadding="0" cellspacing="0">
					<tbody><tr>
						<td>
							<select id="quote-accordion-product" name="product">
								<option selected="selected" value="">Select a Product</option>
								<option value="life">Term Life Insurance</option><option value="di">Disability Insurance</option><option value="medsupp">Medicare Supplement Insurance</option>							</select>
						</td>
					</tr>
					<tr>
						<td>
							<select id="quote-accordion-state" name="state">
								<option selected="selected" value="">Select Your State</option>
                            <option value="AL">Alabama</option><option value="AK">Alaska</option><option value="AZ">Arizona</option><option value="AR">Arkansas</option><option value="CA">California</option><option value="CO">Colorado</option><option value="CT">Connecticut</option><option value="DE">Delaware</option><option value="DC">D.C.</option><option value="FL">Florida</option><option value="GA">Georgia</option><option value="HI">Hawaii</option><option value="ID">Idaho</option><option value="IL">Illinois</option><option value="IN">Indiana</option><option value="IA">Iowa</option><option value="KS">Kansas</option><option value="KY">Kentucky</option><option value="LA">Louisiana</option><option value="ME">Maine</option><option value="MD">Maryland</option><option value="MA">Massachusetts</option><option value="MI">Michigan</option><option value="MN">Minnesota</option><option value="MS">Mississippi</option><option value="MO">Missouri</option><option value="MT">Montana</option><option value="NE">Nebraska</option><option value="NV">Nevada</option><option value="NH">New Hampshire</option><option value="NJ">New Jersey</option><option value="NM">New Mexico</option><option value="NY">New York</option><option value="NC">North Carolina</option><option value="ND">North Dakota</option><option value="OH">Ohio</option><option value="OK">Oklahoma</option><option value="OR">Oregon</option><option value="PA">Pennsylvania</option><option value="PR">Puerto Rico</option><option value="RI">Rhode Island</option><option value="SC">South Carolina</option><option value="SD">South Dakota</option><option value="TN">Tennessee</option><option value="TX">Texas</option><option value="UT">Utah</option><option value="VT">Vermont</option><option value="VI">Virgin Islands</option><option value="VA">Virginia</option><option value="WA">Washington</option><option value="WV">West Virginia</option><option value="WI">Wisconsin</option><option value="WY">Wyoming</option>							</select>
						</td>
					</tr>
				</tbody></table>
				<input class="btn" id="quote-accordion-submit" value="" type="submit">
			</form>
		</div>
	</li>
	<li class="accordion-tab">
		<h2><a href="#"><span>Find An Agent</span></a></h2>
		<div class="tab-content find">
			<p>Have an agent contact you.</p>
            <a href="http://www.mutualofomaha.com/findagent/?src=home-accordion" class="send-request"><span>Get Connected</span></a>
			<hr>
			<p class="locate">Locate an agent or local sales office by<br><strong>ZIP or last name</strong>.</p>
			<form name="findAgent" id="agent-accordion" action="" method="post">
				<table>
					<tbody><tr>
						<td>
							<input name="urlpost" id="urlpost_accordion" value="/divisionweb/SearchAgent" type="hidden">
							<input name="agent-lookup" id="agent-lookup-accordion" class="agent-lookup" tabindex="1" type="text">
							<input name="agt_find_city" id="agt_find_city_accordion" value="" type="hidden">
							<input name="agt_find_state" id="agt_find_state_accordion" value="" type="hidden">
							<input name="lastname" id="lastname-accordion" value="" type="hidden">
							<input value="" class="btn" id="agent-go-accordion" type="submit">
                            						</td>
					</tr>
					<!-- <tr class="short">
						<td><a href="/customer-service/agents.php">View Alphabetical List of Agents</a></td>
					</tr> -->
				</tbody></table>
			</form>
		</div>
	</li>
	<li class="accordion-tab">
		<h2><a href="#"><span>Buy Online</span></a></h2>
		<div class="tab-content buyonline">
			<ul>
				<li class="first-child"><a href="http://www.mutualdirect.com/wlg/?r=m&amp;link=a" target="_blank">Adult Life Insurance</a></li>
				<li><a href="http://www.childrenslifeinsurance.com/?r=m&amp;link=a" target="_blank">Children’s Life Insurance</a></li>
				<li><a href="https://www.cancer-coverage.com/index.aspx?keyline=521000018&amp;keyline9=521000018&amp;keyline15=WLZ999Z10T01A52" target="_blank">Cancer Insurance</a></li>
				<li><a href="https://www.accident-protection.com/default.asp?keyline=520600016&amp;keyline9=520600016&amp;keyline15=WLZ999Z06T01A03" target="_blank">Accidental Death Insurance</a></li>
				<li class="last-child">&nbsp;</li>
			</ul>
		</div>
	</li>
</ul>		</div>
		<div class="main">
			<div class="columns">
				<div class="column left">
					<h2>Insurance</h2>
					<ul>
						<li><a href="http://www.mutualofomaha.com/life-insurance/?src=links-home">Life Insurance</a></li>
						<li><a href="http://www.mutualofomaha.com/disability-insurance/?src=links-home">Disability Insurance</a></li>
						<li><a href="http://www.mutualofomaha.com/medicare-supplement-insurance/?src=links-home" rel="productstate">Medicare Supplement Insurance</a></li>
						<li><a href="http://www.mutualofomaha.com/long-term-care-insurance/?src=links-home" rel="productstate">Long-Term Care Insurance</a></li>
						<li class="last"><a href="http://www.mutualofomaha.com/products/?src=links-home">All Insurance Products</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="View All Insurance Products" border="0"></li>
					</ul>
				</div>
				<div class="column">
					<h2>Internet Banking</h2>
					<ul>
						<li><a href="http://www.mutualofomahaebank.com/checking/?ref=mutual&amp;link=hp&amp;promotionalCode=C10E11Q">Checking</a></li>
                        <li><a href="http://www.mutualofomahaebank.com/money-market/?ref=mutual&amp;link=hp&amp;promotionalCode=J10E11Q">Money Market</a></li>
						<li><a href="http://www.mutualofomahaebank.com/credit-card/?ref=mutual&amp;link=hp&amp;mc=E10E11Q">Credit Card</a></li>
						<li class="last"><a href="http://www.mutualofomahaebank.com/?ref=mutual&amp;link=hp">All Internet Banking Products</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="View All Insurance Products" border="0"></li>
					</ul>
				</div>
			</div>			<ul class="ad-row">
				<li><a href="http://www.mutualofomaha.com/employers/products/?src=ad1" class="ad-1">Group Benefits and <br>Retirement Solutions</a></li>
				<li><a href="http://www.mutualofomaha.com/disability-insurance/plan/needs-assessment-calc.php?src=ad2" class="ad-2">Could You Live<br>Without a Paycheck?</a></li>
				<li class="last"><a href="http://www.ahamoment.com/" class="ad-3">Visit<br>ahamoment.com</a></li>
			</ul>		</div>	</div>	<div id="extras">
	<div id="quick-links">
		<h2>Quick Links</h2>
        		<ul>
			<li><a href="http://www.mutualofomaha.com/provideraccess/?ref=qlinks&amp;" class="provider">Provider Access</a></li>
			<li><a href="http://www.mutualofomaha.com/contact/?ref=qlinks&amp;policyholder_type=group-admin">Plan Administrators</a> <small>(Employers)</small></li>
			<li><a href="http://www.mutualofomaha.com/contact/?ref=qlinks&amp;policyholder_type=group-member">Plan Members</a> <small>(Employees)</small></li>
			            
			<li><a href="http://www.getretirementright.com/?ref=qlinks&amp;" class="retirementServices">Retirement Services</a></li>
			<li><a href="http://www.mutualofomaha.com/mois/?ref=qlinks&amp;">Investors</a></li>
		</ul>
	</div>
	<div id="xxx">
		<div id="xxx-tab-content">
			<div id="news_feed">
				<ul><li><a href="http://www.mutualofomaha.com/about/press/products/2014-09-16.php" title="Mutual of Omaha Retirement Services Hiring Positions to Offer Dedicated Fiduciary Support for New ERISA 3(16) Solution for 401(k) Plans">Mutual
 of Omaha Retirement Services Hiring Positions to Offer Dedicated 
Fiduciary Support for New ERISA 3(16) Solution for 401(k) Plans</a><p class="date">September 17, 2014</p></li><li><a href="http://www.mutualofomaha.com/about/press/wild-kingdom/2014-09-05.php" title="Mutual of Omaha’s Wild Kingdom Explores the World of Penguins">Mutual of Omaha’s Wild Kingdom Explores the World of Penguins</a><p class="date">September 05, 2014</p></li></ul>				<span class="float-left"><a href="http://feeds.feedburner.com/MutualOfOmahaNews" class="img-link"><img src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/rss-16x16.png" alt="Subscribe to the Mutual of Omaha News Feed" title="Subscribe to the Mutual of Omaha News Feed" border="0" height="16" width="16"></a></span><p class="float-right"><a href="http://www.mutualofomaha.com/about/press/?src=links-home" class="more">All News &amp; Events</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="View All News &amp; Events"></p>
			</div>
			<div id="careers" class="ui-tabs-hide">
				<ul class="two-col">
					<li class="header">Current Opportunities</li>
					<li><a href="http://www.mutualofomaha.com/careers/openings.php">All</a></li>
					<li><a href="http://www.mutualofomaha.com/careers/sales/?src=links-home">Sales</a></li>
					<li><a href="http://www.mutualofomaha.com/careers/openings.php?jobs=customer-service">Customer Service</a></li>
					<li><a href="http://www.mutualofomaha.com/careers/openings.php?jobs=banking">Banking</a></li>
					<li><a href="http://www.mutualofomaha.com/careers/internships/?src=links-home">Internships</a></li>
				</ul>
				<ul class="two-col last">
					<li class="header">Learn More</li>
					<li><a href="http://www.mutualofomaha.com/careers/benefits/?src=links-home">Benefits</a></li>
					<li><a href="http://www.mutualofomaha.com/careers/hiring-process.php?src=links-home">Our Hiring Process</a></li>
					<li><a href="http://www.mutualofomaha.com/careers/life-at-mutual.php?src=links-home">Life at Mutual</a></li>
				</ul>
				<p class="float-right"><a href="http://www.mutualofomaha.com/careers/?src=links-home" class="more">Visit Our Careers Page</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="Visit Our Careers Page"></p>
							</div>
			<div id="why_mutual" class="ui-tabs-hide">
				<p style="padding:0">Our strength and financial stability are confirmed by continually high ratings from leading industry-rating organizations.</p>
								<table width="100%">
					<tbody><tr>
						<td class="company" valign="middle"><strong>A.M. Best Company, Inc.</strong></td>
						<td class="rating" valign="middle"><strong>A+</strong> (Superior)</td>
					</tr>
					<tr>
						<td class="company" valign="middle"><strong>Moody’s Investors Service</strong></td>
						<td class="rating" valign="middle"><strong>A1</strong> (Good)</td>
					</tr>
					<tr>
						<td class="company-last" valign="middle"><strong>Standard &amp; Poor’s</strong></td>
						<td class="rating-last" valign="middle"><strong>A+</strong> (Strong)</td>
					</tr>
				</tbody></table>
				<p class="float-right"><a href="http://www.mutualofomaha.com/about/ratings.php?src=links-home" class="more">Learn More</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="Ratings for Mutual of Omaha Companies"></p>
			</div>
			<div id="life_balance" class="ui-tabs-hide">
				<p style="padding-bottom:20px; font-size:12px;">What is an aha 
moment? It’s a moment of clarity, a defining moment where you gain  
wisdom that  can change your life. Whether big or small, funny or sad, 
they can be surprising and inspiring.<br><br>
                Mutual of Omaha celebrates and honors these moments and 
the people who act upon them. We're proud to have the products and 
services that can help people insure their possibilities.</p>
				<p class="float-right"><a href="http://www.ahamoment.com/" class="more">Check out ahamoment.com</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="View 2011 Commercials"></p>
			</div>
		</div>		
		<ul id="xxx-tabs" class="ui-tabs">
			<li class="top"><a href="#news_feed">News &amp; Events</a></li>
			<li class="mid"><a href="#careers">Careers</a></li>
			<li class="mid"><a href="#why_mutual">Why Mutual of Omaha?</a></li>
			<li class="btm"><a href="#life_balance">Aha Moments</a></li>
		</ul>	</div></div>	<img alt="active-arrow" class="sitemap_arrow displayNone" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/sitemap-arrow.gif" border="0">
<ul class="sitemap_nav">
	<li class="sitemap_title"><a href="#sitemap" onclick="return false">Site Map</a></li>
	<li id="sitemap_products_nav"><a href="#sitemap" onclick="return false">Products</a></li>
	<li id="sitemap_tools_nav"><a href="#sitemap" onclick="return false">Tools &amp; Advice</a></li>
	<li id="sitemap_about_nav"><a href="#sitemap" onclick="return false">About Us</a></li>
	
	
		<ul class="social_nav">
			<li><a href="http://feeds.feedburner.com/MutualOfOmahaNews" target="_blank" id="icon-rss"><img src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/rss-16x16.png" alt="Subscribe to the Mutual of Omaha News Feed" title="Subscribe to the Mutual of Omaha News Feed"></a></li>
			<li><a href="http://www.facebook.com/mutualofomaha" target="_blank" id="icon-fb"><img src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/facebook16.png" alt="Mutual of Omaha on Facebook" title="Mutual of Omaha on Facebook"></a></li>
			<li><a href="http://www.twitter.com/mutualofomaha" target="_blank" id="icon-twitter"><img src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/twitter16.png" alt="Mutual of Omaha on Twitter" title="Mutual of Omaha on Twitter"></a></li>
			<li><a href="http://www.linkedin.com/company/mutual-of-omaha" target="_blank" id="icon-linkedin"><img src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/linkedin16.png" alt="Mutual of Omaha on LinkedIn" title="Mutual of Omaha on LinkedIn"></a></li>
			<li>
				<!-- Place this tag where you want the +1 button to render. -->
				<div class="g-plusone" data-size="small" data-annotation="none" data-href="https://plus.google.com/107822369381573048774" data-rel="publisher"></div>
				
				<!-- Place this tag after the last +1 button tag. -->
				<script type="text/javascript">
				  (function() {
				    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				    po.src = 'https://apis.google.com/js/plusone.js';
				    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				  })();
				</script>
			</li>
		</ul>

	</ul>
<div id="sitemap" class="displayNone">
	<div id="sitemap_products_links" class="wrapper displayNone">
		<div class="col">
			<h3>Individuals</h3>
			<h4>&nbsp;</h4>
			<ul>
				<li><a href="http://www.mutualofomaha.com/life-insurance/?src=sitemap">Life Insurance</a></li>
				<li><a href="http://www.mutualofomaha.com/disability-insurance/?src=sitemap">Disability Insurance</a></li>
				<li><a href="http://www.mutualofomaha.com/medicare-supplement-insurance/?src=sitemap" rel="productstate">Medicare Supplement Insurance</a></li>
				<li><a href="http://www.mutualofomaha.com/long-term-care-insurance/?src=sitemap" rel="productstate">Long Term Care Insurance</a></li>
				<li class="last"><a href="http://www.mutualofomaha.com/products/?src=sitemap">&nbsp;&nbsp; All Insurance Products</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="Products for Individuals" border="0"></li>
			</ul>
		</div>
		<div class="col">
			<h3>&nbsp;</h3>
			<h4>Next Steps</h4>
			<ul>
				<li class="space quote"><a href="http://www.mutualofomaha.com/findagent/?src=sitemap" class="sitemap-connect">Connect with an Agent</a></li>
				<li class="space quote"><a href="http://www.mutualofomahabuyonline.com/?src=sitemap" class="sitemap-connect">Buy Online</a></li>
			</ul>
		</div>
		<div class="col">
			<h3>Employers</h3>
			<h4>&nbsp;</h4>
			<ul>
				<li><a href="http://www.mutualofomaha.com/employers/products/life/?src=sitemap">Life</a></li>
				<li><a href="http://www.mutualofomaha.com/employers/products/disability/?src=sitemap">Disability</a></li>
				<li><a href="http://www.mutualofomaha.com/employers/products/dental/?src=sitemap">Dental</a></li>
				<li><a href="http://www.getretirementright.com/?src=sitemap" rel="external">Retirement Plans</a></li>
				<li><a href="http://www.mutualofomaha.com/products/?src=sitemap">&nbsp;&nbsp; All Insurance Products</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="Employer Products" border="0"></li>
			</ul>
		</div>


	</div>
	<!-- end ff_products_links -->
	<div id="sitemap_tools_links" class="wrapper displayNone">
		<div class="col">
			<h3>Articles</h3>
            <h4>&nbsp;</h4>
			<ul>
				<li><a href="http://blogs.mutualofomaha.com/articles/category/financial-management/?src=footer">Financial Management</a></li>
				<li><a href="http://blogs.mutualofomaha.com/articles/category/health-and-exercise/?src=footer">Health &amp; Exercise</a></li>
				<li><a href="http://blogs.mutualofomaha.com/articles/category/children/?src=footer">Children</a></li>
				<li><a href="http://blogs.mutualofomaha.com/articles/?src=footer">&nbsp;&nbsp; All Articles</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="Articles" border="0"></li>              
			</ul>
		</div>
		<div class="col">
			<h3>Calculators</h3>
			<h4>Insurance</h4>
			<ul>
				<li><a href="http://www.mutualofomaha.com/tools/calculators/insurance/how-much-life-insurance.php?src=footer">How Much Life Insurance Do You Need?</a></li>
				<li><a href="http://www.mutualofomaha.com/tools/calculators/insurance/how-much-disability-insurance.php?src=footer">How Much Disability income Insurance Do I Need?</a></li>
				<li><a href="http://www.mutualofomaha.com/site-map.php/?src=sitemap">&nbsp;&nbsp; All Insurance Calculators</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="Insurance Calculators" border="0"></li>
			</ul>
		</div>
        <div class="col">
			<h3>&nbsp;</h3>
			<h4>Financial Fitness</h4>
			<ul>
				<li><a href="http://www.mutualofomaha.com/tools/calculators/financial-fitness/how-long-pay-off-credit-card.php?src=footer">How Long Will It Take to Pay Off My Credit Card?</a></li>
				<li><a href="http://www.mutualofomaha.com/tools/calculators/financial-fitness/what-is-value-of-interest.php?src=footer">What Is the Value of Interest?</a></li>
				<li><a href="http://www.mutualofomaha.com/site-map.php/?src=sitemap">&nbsp;&nbsp; All Financial Fitness</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="Financial Fitness" border="0"></li>
			</ul>
		</div>
		<div class="col">
			<h3>&nbsp;</h3>
			<h4>Retirement Planning</h4>
			<ul>
				<li><a href="http://www.mutualofomaha.com/tools/calculators/retirement-planning/when-begin-saving-for-retirement.php?src=footer">When Should I Begin Saving for Retirement?</a></li>
				<li><a href="http://www.mutualofomaha.com/tools/calculators/retirement-planning/how-much-saving-for-retirement.php?src=footer">How Much Will I Need to Save for Retirement?</a></li>
                <li><a href="http://www.mutualofomaha.com/site-map.php/?src=sitemap">&nbsp;&nbsp; All Retirement Planning</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="Retirement Planning" border="0"></li>
			</ul>
		</div>
	</div>
	<!-- end ff_tools_links -->
	<div id="sitemap_about_links" class="wrapper displayNone">
		<div class="col">
			<h3>Our Company</h3>
            <h4>&nbsp;</h4>
			<ul>
				<li><a href="http://www.mutualofomaha.com/about/company/ratings.php?src=footer">Ratings</a></li>
				<li><a href="http://www.mutualofomaha.com/about/company/financial-strength.php?src=footer">Financial Strength</a></li>
				<li><a href="http://www.mutualofomaha.com/about/company/community-support/?src=footer">Community Support</a></li>
				<li><a href="http://www.mutualofomaha.com/documents/about/code_of_conduct.pdf?src=footer">Code of Conduct</a></li>
                <li><a href="http://www.mutualofomaha.com/about/?src=footer">&nbsp;&nbsp; All Company Information</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="Our Company" border="0"></li>
			</ul>
			<h3>&nbsp;</h3>
			<ul>
				<li><a href="http://www.mutualofomaha.com/about/press/?src=footer">Press Releases</a></li>
			</ul>
		</div>
		<div class="col">
			<h3>Careers</h3>
            <h4>&nbsp;</h4>
			<ul>
				<li><a href="http://www.mutualofomaha.com/careers/benefits/?src=footer">Benefits</a></li>
				<li><a href="http://www.mutualofomaha.com/careers/career-fields.php?src=footer">Career Fields</a></li>
				<li><a href="http://www.mutualofomaha.com/careers/life-at-mutual.php?src=footer">Life at Mutual</a></li>
				<li><a href="http://www.mutualofomaha.com/careers/openings.php?src=footer">Current Job Openings</a></li>
                <li><a href="http://www.mutualofomaha.com/careers/?src=footer">&nbsp;&nbsp; All Careers</a><img class="arrow" src="Mutual%20of%20Omaha%20Life%20Insurance,%20Disability%20Insurance%20&amp;%20More_files/pixel-transparent.gif" alt="Careers" border="0"></li>
			</ul>
		</div>
		<div class="col">
			<h3>National Sponsorships</h3>
            <h4>&nbsp;</h4>
			<ul>
				<li><a href="http://www.mutualofomaha.com/usa-swimming/?src=footer" target="_blank">USA Swimming</a></li>
				<li><a href="http://www.mutualofomaha.com/golf/?src=footer" target="_blank">Golf Sponsorship</a></li>
			</ul>
		</div>
		<div class="col">
			<h3>Affiliate Programs</h3>
            <h4>&nbsp;</h4>
				<ul>
					<li><a href="http://www.wildkingdom.com/?src=mutual&amp;link=sitemap" target="_blank">Mutual of Omaha’s Wild Kingdom</a></li>
					<li><a href="http://www.ahamoment.com/?src=mutual&amp;link=sitemap" target="_blank">aha moment</a></li>
					<li><a href="http://www.mutualofomahafoundation.org/?src=mutual&amp;link=sitemap" target="_blank">Mutual of Omaha Foundation</a></li>
				</ul>
		</div>

	</div>
	</div>
</div>
<div id="footer">
	<ul class="links">
		<li><a href="http://www.mutualofomaha.com/legal/privacy.php">Privacy Policy</a></li>
		<li><a href="http://www.mutualofomaha.com/legal/terms.php">Terms of Use</a></li>
		<li><a href="http://www.mutualofomaha.com/contact/?src=footer">Site Map</a></li>
	</ul>
   	<p class="copyright"><img src="images/secure-site.png" alt="" title="Mutual of Omaha" border="0"></p>
    <div class="clear-both">
	</div>
    
	<p>© 2013 Mutual of Omaha Insurance Company. All rights reserved.</p>
	<p>Powered by TZ Insurance Solutions LLC.</p>
	</br>
	<p>this is a solicitation of insuranced and licensed agent may contact you by telephone to provide additional information. Not connected with endorsed by U.S. government or the Federal Medicare program.</p>
	</br>
	<p>AFN45725</p>

</div>
</div>



</body>

<?php  
/*$this->title = "My Albums";
$this->headTitle($this->title);
?>
<p><a href="<?php echo $this->url(array('controller'=>'index',
 'action'=>'add'));?>">Add new album</a></p>
<table>
<tr>
 <th>Title</th>
 <th>Artist</th>
 <th>&nbsp;</th>
</tr>
<?php foreach($this->albums as $album) : ?>
<tr>
 <td><?php echo $this->escape($album->title);?></td>
 <td><?php echo $this->escape($album->artist);?></td>
  <td>
 <a href="<?php echo $this->url(array('controller'=>'index',
 'action'=>'edit', 'id'=>$album->id));?>">Edit</a>
 <a href="<?php echo $this->url(array('controller'=>'index',
 'action'=>'delete', 'id'=>$album->id));?>">Delete</a>
 </td>
</tr>
<?php endforeach; ?>
</table>
*/
?>