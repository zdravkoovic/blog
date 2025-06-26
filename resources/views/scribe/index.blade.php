<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost:8000";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.2.1.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.2.1.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-auth-register">
                                <a href="#endpoints-POSTapi-v1-auth-register">POST api/v1/auth/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-auth-login">
                                <a href="#endpoints-POSTapi-v1-auth-login">POST api/v1/auth/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-logout">
                                <a href="#endpoints-POSTapi-v1-logout">POST api/v1/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-posts">
                                <a href="#endpoints-GETapi-v1-posts">GET api/v1/posts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-posts-tags">
                                <a href="#endpoints-GETapi-v1-posts-tags">GET api/v1/posts/tags</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-posts-search">
                                <a href="#endpoints-GETapi-v1-posts-search">GET api/v1/posts/search</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-categories">
                                <a href="#endpoints-GETapi-v1-categories">Get all blog categories.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-posts--id-">
                                <a href="#endpoints-GETapi-v1-posts--id-">GET api/v1/posts/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-posts">
                                <a href="#endpoints-POSTapi-v1-posts">POST api/v1/posts</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-posts-comment">
                                <a href="#endpoints-POSTapi-v1-posts-comment">POST api/v1/posts/comment</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-v1-posts-like">
                                <a href="#endpoints-POSTapi-v1-posts-like">POST api/v1/posts/like</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-posts-comments--id-">
                                <a href="#endpoints-GETapi-v1-posts-comments--id-">GET api/v1/posts/comments/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-v1-posts-comments--id-">
                                <a href="#endpoints-DELETEapi-v1-posts-comments--id-">DELETE api/v1/posts/comments/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-users">
                                <a href="#endpoints-GETapi-v1-users">GET api/v1/users</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-users--id-">
                                <a href="#endpoints-GETapi-v1-users--id-">GET api/v1/users/{id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-me">
                                <a href="#endpoints-GETapi-v1-me">GET api/v1/me</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-v1-manticore-autocomplete">
                                <a href="#endpoints-GETapi-v1-manticore-autocomplete">GET api/v1/manticore/autocomplete</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 26, 2025</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-POSTapi-v1-auth-register">POST api/v1/auth/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-auth-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/auth/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"-0pBNvYgxw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/auth/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "-0pBNvYgxw"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-register">
</span>
<span id="execution-results-POSTapi-v1-auth-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-auth-register" data-method="POST"
      data-path="api/v1/auth/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-register"
                    onclick="tryItOut('POSTapi-v1-auth-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-register"
                    onclick="cancelTryOut('POSTapi-v1-auth-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-auth-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-v1-auth-register"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-auth-register"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-auth-register"
               value="-0pBNvYgxw"
               data-component="body">
    <br>
<p>Must be at least 6 characters. Example: <code>-0pBNvYgxw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-auth-login">POST api/v1/auth/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-auth-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/auth/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"|]|{+-\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/auth/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "|]|{+-"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-auth-login">
</span>
<span id="execution-results-POSTapi-v1-auth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-auth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-auth-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-auth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-auth-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-auth-login" data-method="POST"
      data-path="api/v1/auth/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-auth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-auth-login"
                    onclick="tryItOut('POSTapi-v1-auth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-auth-login"
                    onclick="cancelTryOut('POSTapi-v1-auth-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-auth-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/auth/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-auth-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-v1-auth-login"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-v1-auth-login"
               value="|]|{+-"
               data-component="body">
    <br>
<p>Example: <code>|]|{+-</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-logout">POST api/v1/logout</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/logout" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/logout"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-logout">
</span>
<span id="execution-results-POSTapi-v1-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-logout" data-method="POST"
      data-path="api/v1/logout"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-logout"
                    onclick="tryItOut('POSTapi-v1-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-logout"
                    onclick="cancelTryOut('POSTapi-v1-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-logout"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-posts">GET api/v1/posts</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-posts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/posts" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/posts"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-posts">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Success&quot;,
    &quot;meta&quot;: {
        &quot;current_page&quot;: 1,
        &quot;from&quot;: 1,
        &quot;last_page&quot;: 2,
        &quot;links&quot;: [
            {
                &quot;url&quot;: null,
                &quot;label&quot;: &quot;&amp;laquo; Previous&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/posts?page=1&quot;,
                &quot;label&quot;: &quot;1&quot;,
                &quot;active&quot;: true
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/posts?page=2&quot;,
                &quot;label&quot;: &quot;2&quot;,
                &quot;active&quot;: false
            },
            {
                &quot;url&quot;: &quot;http://localhost/api/v1/posts?page=2&quot;,
                &quot;label&quot;: &quot;Next &amp;raquo;&quot;,
                &quot;active&quot;: false
            }
        ],
        &quot;path&quot;: &quot;http://localhost/api/v1/posts&quot;,
        &quot;per_page&quot;: 30,
        &quot;to&quot;: 30,
        &quot;total&quot;: 47
    },
    &quot;links&quot;: {
        &quot;first&quot;: &quot;http://localhost/api/v1/posts?page=1&quot;,
        &quot;last&quot;: &quot;http://localhost/api/v1/posts?page=2&quot;,
        &quot;prev&quot;: null,
        &quot;next&quot;: &quot;http://localhost/api/v1/posts?page=2&quot;
    },
    &quot;data&quot;: [
        {
            &quot;id&quot;: 47,
            &quot;title&quot;: &quot;Radi&quot;,
            &quot;content&quot;: &quot;Sada bi trebalo da radi&quot;,
            &quot;slug&quot;: &quot;radi&quot;,
            &quot;created_at&quot;: &quot;2025-06-14T16:55:28.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-14T16:55:28.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    3
                ],
                &quot;names&quot;: [
                    &quot;JavaScript&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;javascript&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 1,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 46,
            &quot;title&quot;: &quot;Ajde sada da vidimo&quot;,
            &quot;content&quot;: &quot;Ajde sada da vidimo sta ce da se desi&quot;,
            &quot;slug&quot;: &quot;ajde-sada-da-vidimo&quot;,
            &quot;created_at&quot;: &quot;2025-06-14T16:51:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-14T16:51:47.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    4
                ],
                &quot;names&quot;: [
                    &quot;Vue.js&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;vue-js&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 45,
            &quot;title&quot;: &quot;Ajde jos nesto&quot;,
            &quot;content&quot;: &quot;Sada nesto iz php-a&quot;,
            &quot;slug&quot;: &quot;ajde-jos-nesto&quot;,
            &quot;created_at&quot;: &quot;2025-06-14T16:50:39.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-14T16:50:39.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    1
                ],
                &quot;names&quot;: [
                    &quot;PHP&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;php&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 44,
            &quot;title&quot;: &quot;Ajde sada&quot;,
            &quot;content&quot;: &quot;Ajmo ajde sada&quot;,
            &quot;slug&quot;: &quot;ajde-sada&quot;,
            &quot;created_at&quot;: &quot;2025-06-14T16:49:56.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-14T16:49:56.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    3
                ],
                &quot;names&quot;: [
                    &quot;JavaScript&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;javascript&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 43,
            &quot;title&quot;: &quot;2 nesto glupo&quot;,
            &quot;content&quot;: &quot;2. nesto glupo&quot;,
            &quot;slug&quot;: &quot;2-nesto-glupo&quot;,
            &quot;created_at&quot;: &quot;2025-06-14T16:48:44.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-14T16:48:44.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    3
                ],
                &quot;names&quot;: [
                    &quot;JavaScript&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;javascript&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 42,
            &quot;title&quot;: &quot;Nesto glupo&quot;,
            &quot;content&quot;: &quot;Nesto sasvim glupo i nepotrebno&quot;,
            &quot;slug&quot;: &quot;nesto-glupo&quot;,
            &quot;created_at&quot;: &quot;2025-06-14T16:47:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-14T16:47:15.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    3
                ],
                &quot;names&quot;: [
                    &quot;JavaScript&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;javascript&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 41,
            &quot;title&quot;: &quot;Proba1&quot;,
            &quot;content&quot;: &quot;`Bearer ${req.cookies.access_token}`&quot;,
            &quot;slug&quot;: &quot;proba1&quot;,
            &quot;created_at&quot;: &quot;2025-06-05T19:01:51.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-05T19:01:51.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    2
                ],
                &quot;names&quot;: [
                    &quot;Laravel&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;laravel&quot;
                ]
            },
            &quot;comments_count&quot;: 1,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 40,
            &quot;title&quot;: &quot;Proba&quot;,
            &quot;content&quot;: &quot;Da probamo da li radi dodavanje bloga&quot;,
            &quot;slug&quot;: &quot;proba&quot;,
            &quot;created_at&quot;: &quot;2025-06-05T18:46:55.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-06-05T18:46:55.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [],
                &quot;names&quot;: [],
                &quot;slugs&quot;: []
            },
            &quot;comments_count&quot;: 1,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 37,
            &quot;title&quot;: &quot;Odit enim labore error.&quot;,
            &quot;content&quot;: &quot;Et doloremque sit rem ullam voluptatum. Reiciendis...&quot;,
            &quot;slug&quot;: &quot;odit-enim-labore-error&quot;,
            &quot;created_at&quot;: &quot;2025-05-31T22:17:37.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-31T22:17:37.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Prof. Agustin Simonis Jr.&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [],
                &quot;names&quot;: [],
                &quot;slugs&quot;: []
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 39,
            &quot;title&quot;: &quot;Minima sit molestiae molestiae optio.&quot;,
            &quot;content&quot;: &quot;Eaque sit incidunt laudantium. Modi qui excepturi...&quot;,
            &quot;slug&quot;: &quot;minima-sit-molestiae-molestiae-optio&quot;,
            &quot;created_at&quot;: &quot;2025-05-31T22:17:37.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-31T22:17:37.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Agnes Hodkiewicz&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [],
                &quot;names&quot;: [],
                &quot;slugs&quot;: []
            },
            &quot;comments_count&quot;: 1,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 38,
            &quot;title&quot;: &quot;Possimus rem repudiandae cupiditate magnam repudiandae quo.&quot;,
            &quot;content&quot;: &quot;Harum consequuntur dolor maiores quisquam officia....&quot;,
            &quot;slug&quot;: &quot;possimus-rem-repudiandae-cupiditate-magnam-repudiandae-quo&quot;,
            &quot;created_at&quot;: &quot;2025-05-31T22:17:37.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-31T22:17:37.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Eddie Haley&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [],
                &quot;names&quot;: [],
                &quot;slugs&quot;: []
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 36,
            &quot;title&quot;: &quot;Ke&scaron; post&quot;,
            &quot;content&quot;: &quot;Ovo je post za proveru ke&scaron;a&quot;,
            &quot;slug&quot;: &quot;kes-post&quot;,
            &quot;created_at&quot;: &quot;2025-05-29T12:53:15.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-29T12:53:15.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [],
                &quot;names&quot;: [],
                &quot;slugs&quot;: []
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 35,
            &quot;title&quot;: &quot;Post od Gorana Zorana&quot;,
            &quot;content&quot;: &quot;Moze&quot;,
            &quot;slug&quot;: &quot;post-od-gorana-zorana&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T18:28:51.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T18:28:51.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    5
                ],
                &quot;names&quot;: [
                    &quot;MySQL&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;mysql&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 34,
            &quot;title&quot;: &quot;Nesto cudno&quot;,
            &quot;content&quot;: &quot;Nesto cudno se desava&quot;,
            &quot;slug&quot;: &quot;nesto-cudno&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T17:50:11.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T17:50:11.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    2
                ],
                &quot;names&quot;: [
                    &quot;Laravel&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;laravel&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 33,
            &quot;title&quot;: &quot;Sumnjivo lice&quot;,
            &quot;content&quot;: &quot;Sumnjivo lice&quot;,
            &quot;slug&quot;: &quot;sumnjivo-lice&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T17:48:50.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T17:48:50.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    1
                ],
                &quot;names&quot;: [
                    &quot;PHP&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;php&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 32,
            &quot;title&quot;: &quot;Skoro pa gotovo&quot;,
            &quot;content&quot;: &quot;Novi fosili recimi tiho&quot;,
            &quot;slug&quot;: &quot;skoro-pa-gotovo&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T15:45:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T15:45:36.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    6
                ],
                &quot;names&quot;: [
                    &quot;Gitara&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;gitara&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 31,
            &quot;title&quot;: &quot;Sumnjivo je i dalje&quot;,
            &quot;content&quot;: &quot;Mozda ce da radi&quot;,
            &quot;slug&quot;: &quot;sumnjivo-je-i-dalje&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T15:44:21.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T15:44:21.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    2
                ],
                &quot;names&quot;: [
                    &quot;Laravel&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;laravel&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 30,
            &quot;title&quot;: &quot;Sumnjivo je&quot;,
            &quot;content&quot;: &quot;Mozda ce da radi&quot;,
            &quot;slug&quot;: &quot;sumnjivo-je&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T15:41:59.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T15:41:59.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    2,
                    4
                ],
                &quot;names&quot;: [
                    &quot;Laravel&quot;,
                    &quot;Vue.js&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;laravel&quot;,
                    &quot;vue-js&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 29,
            &quot;title&quot;: &quot;Jos malo samo&quot;,
            &quot;content&quot;: &quot;Samo jos malo i bice&quot;,
            &quot;slug&quot;: &quot;jos-malo-samo&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T15:38:14.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T15:38:14.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    2
                ],
                &quot;names&quot;: [
                    &quot;Laravel&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;laravel&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 28,
            &quot;title&quot;: &quot;Mislim da ce ovo da proradi&quot;,
            &quot;content&quot;: &quot;Ovo mora sad da proradi - sad ili nikad!&quot;,
            &quot;slug&quot;: &quot;mislim-da-ce-ovo-da-proradi&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T15:29:04.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T15:29:04.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    2
                ],
                &quot;names&quot;: [
                    &quot;Laravel&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;laravel&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 27,
            &quot;title&quot;: &quot;Laravel 1&quot;,
            &quot;content&quot;: &quot;Laravel...&quot;,
            &quot;slug&quot;: &quot;1-laravel-1&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T14:10:47.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T14:10:47.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    1,
                    2
                ],
                &quot;names&quot;: [
                    &quot;PHP&quot;,
                    &quot;Laravel&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;php&quot;,
                    &quot;laravel&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 26,
            &quot;title&quot;: &quot;Laravel 1&quot;,
            &quot;content&quot;: &quot;Laravel...&quot;,
            &quot;slug&quot;: &quot;laravel-1&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T14:04:37.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T14:04:37.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [],
                &quot;names&quot;: [],
                &quot;slugs&quot;: []
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 25,
            &quot;title&quot;: &quot;Laravel nije kako treba&quot;,
            &quot;content&quot;: &quot;Imam problema sa laravelom&quot;,
            &quot;slug&quot;: &quot;1-laravel-nije-kako-treba&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T12:19:21.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T12:19:21.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [],
                &quot;names&quot;: [],
                &quot;slugs&quot;: []
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 24,
            &quot;title&quot;: &quot;Laravel nije kako treba&quot;,
            &quot;content&quot;: &quot;Imam problema sa laravelom&quot;,
            &quot;slug&quot;: &quot;laravel-nije-kako-treba&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T12:14:20.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T12:14:20.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [],
                &quot;names&quot;: [],
                &quot;slugs&quot;: []
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 23,
            &quot;title&quot;: &quot;Projekat u Laravel-u&quot;,
            &quot;content&quot;: &quot;Hteo bih da čujem razna iskustva sa Laravelom.&quot;,
            &quot;slug&quot;: &quot;projekat-u-laravel-u&quot;,
            &quot;created_at&quot;: &quot;2025-05-23T12:02:29.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-23T12:02:29.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Goran Zoran&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    1,
                    2
                ],
                &quot;names&quot;: [
                    &quot;PHP&quot;,
                    &quot;Laravel&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;php&quot;,
                    &quot;laravel&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 22,
            &quot;title&quot;: &quot;Sviram bas gitaru 10 i mrsim muda&quot;,
            &quot;content&quot;: &quot;Kupujem klasičnu gitaru, javite mi se.&quot;,
            &quot;slug&quot;: &quot;sviram-bas-gitaru-10-i-mrsim-muda&quot;,
            &quot;created_at&quot;: &quot;2025-05-22T17:37:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-22T17:37:35.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    1,
                    6
                ],
                &quot;names&quot;: [
                    &quot;PHP&quot;,
                    &quot;Gitara&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;php&quot;,
                    &quot;gitara&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 21,
            &quot;title&quot;: &quot;Sviram bas gitaru 9 i mrsim muda&quot;,
            &quot;content&quot;: &quot;Kupujem klasičnu gitaru, javite mi se.&quot;,
            &quot;slug&quot;: &quot;sviram-bas-gitaru-9-i-mrsim-muda&quot;,
            &quot;created_at&quot;: &quot;2025-05-22T17:36:19.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-22T17:36:19.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    1,
                    6
                ],
                &quot;names&quot;: [
                    &quot;PHP&quot;,
                    &quot;Gitara&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;php&quot;,
                    &quot;gitara&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 20,
            &quot;title&quot;: &quot;Sviram bas gitaru 8 i mrsim muda&quot;,
            &quot;content&quot;: &quot;Kupujem klasičnu gitaru, javite mi se.&quot;,
            &quot;slug&quot;: &quot;sviram-bas-gitaru-8-i-mrsim-muda&quot;,
            &quot;created_at&quot;: &quot;2025-05-22T17:13:13.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-22T17:13:13.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    1,
                    6
                ],
                &quot;names&quot;: [
                    &quot;PHP&quot;,
                    &quot;Gitara&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;php&quot;,
                    &quot;gitara&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 19,
            &quot;title&quot;: &quot;Sviram bas gitaru 7 i mrsim muda&quot;,
            &quot;content&quot;: &quot;Kupujem klasičnu gitaru, javite mi se.&quot;,
            &quot;slug&quot;: &quot;sviram-bas-gitaru-7-i-mrsim-muda&quot;,
            &quot;created_at&quot;: &quot;2025-05-22T17:01:39.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-22T17:01:39.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    1,
                    6
                ],
                &quot;names&quot;: [
                    &quot;PHP&quot;,
                    &quot;Gitara&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;php&quot;,
                    &quot;gitara&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        },
        {
            &quot;id&quot;: 18,
            &quot;title&quot;: &quot;Sviram bas gitaru 6 i mrsim muda&quot;,
            &quot;content&quot;: &quot;Kupujem klasičnu gitaru, javite mi se.&quot;,
            &quot;slug&quot;: &quot;sviram-bas-gitaru-6-i-mrsim-muda&quot;,
            &quot;created_at&quot;: &quot;2025-05-22T14:58:05.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-22T14:58:05.000000Z&quot;,
            &quot;author&quot;: {
                &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
                &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
            },
            &quot;tags&quot;: {
                &quot;ids&quot;: [
                    1,
                    6
                ],
                &quot;names&quot;: [
                    &quot;PHP&quot;,
                    &quot;Gitara&quot;
                ],
                &quot;slugs&quot;: [
                    &quot;php&quot;,
                    &quot;gitara&quot;
                ]
            },
            &quot;comments_count&quot;: 0,
            &quot;likes_count&quot;: 0,
            &quot;cover_image&quot;: null,
            &quot;didUserLike&quot;: false
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-posts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-posts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-posts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-posts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-posts" data-method="GET"
      data-path="api/v1/posts"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-posts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-posts"
                    onclick="tryItOut('GETapi-v1-posts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-posts"
                    onclick="cancelTryOut('GETapi-v1-posts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-posts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/posts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-posts"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-posts-tags">GET api/v1/posts/tags</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-posts-tags">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/posts/tags" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/posts/tags"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-posts-tags">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Success&quot;,
    &quot;meta&quot;: null,
    &quot;links&quot;: null,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;PHP&quot;,
            &quot;slug&quot;: &quot;php&quot;,
            &quot;created_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Laravel&quot;,
            &quot;slug&quot;: &quot;laravel&quot;,
            &quot;created_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;JavaScript&quot;,
            &quot;slug&quot;: &quot;javascript&quot;,
            &quot;created_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Vue.js&quot;,
            &quot;slug&quot;: &quot;vue-js&quot;,
            &quot;created_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;MySQL&quot;,
            &quot;slug&quot;: &quot;mysql&quot;,
            &quot;created_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Gitara&quot;,
            &quot;slug&quot;: &quot;gitara&quot;,
            &quot;created_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2025-05-11T14:08:16.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-posts-tags" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-posts-tags"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-posts-tags"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-posts-tags" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-posts-tags">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-posts-tags" data-method="GET"
      data-path="api/v1/posts/tags"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-posts-tags', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-posts-tags"
                    onclick="tryItOut('GETapi-v1-posts-tags');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-posts-tags"
                    onclick="cancelTryOut('GETapi-v1-posts-tags');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-posts-tags"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/posts/tags</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-posts-tags"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-posts-tags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-posts-tags"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-posts-search">GET api/v1/posts/search</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-posts-search">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/posts/search?query=react" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/posts/search"
);

const params = {
    "query": "react",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-posts-search">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Success&quot;,
    &quot;meta&quot;: null,
    &quot;links&quot;: null,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-posts-search" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-posts-search"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-posts-search"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-posts-search" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-posts-search">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-posts-search" data-method="GET"
      data-path="api/v1/posts/search"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-posts-search', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-posts-search"
                    onclick="tryItOut('GETapi-v1-posts-search');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-posts-search"
                    onclick="cancelTryOut('GETapi-v1-posts-search');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-posts-search"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/posts/search</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-posts-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-posts-search"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>query</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="query"                data-endpoint="GETapi-v1-posts-search"
               value="react"
               data-component="query">
    <br>
<p>Optional. Searching for blog titles and users nickname. Example: <code>react</code></p>
            </div>
                </form>

                    <h2 id="endpoints-GETapi-v1-categories">Get all blog categories.</h2>

<p>
</p>

<p>Retrieves a list of all available categories for blogs.</p>

<span id="example-requests-GETapi-v1-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;success&quot;: true,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Technology&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Lifestyle&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-categories"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-categories">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-categories" data-method="GET"
      data-path="api/v1/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-categories"
                    onclick="tryItOut('GETapi-v1-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-categories"
                    onclick="cancelTryOut('GETapi-v1-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-categories"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/categories</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-categories"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-posts--id-">GET api/v1/posts/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-posts--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/posts/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/posts/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-posts--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-posts--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-posts--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-posts--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-posts--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-posts--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-posts--id-" data-method="GET"
      data-path="api/v1/posts/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-posts--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-posts--id-"
                    onclick="tryItOut('GETapi-v1-posts--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-posts--id-"
                    onclick="cancelTryOut('GETapi-v1-posts--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-posts--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/posts/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-posts--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-posts--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-posts--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the post. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-v1-posts">POST api/v1/posts</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-posts">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/posts" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"b\",
    \"slug\": \"n\",
    \"content\": \"architecto\",
    \"category_id\": 16,
    \"tag_ids\": [
        \"architecto\"
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/posts"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "b",
    "slug": "n",
    "content": "architecto",
    "category_id": 16,
    "tag_ids": [
        "architecto"
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-posts">
</span>
<span id="execution-results-POSTapi-v1-posts" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-posts"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-posts"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-posts" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-posts">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-posts" data-method="POST"
      data-path="api/v1/posts"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-posts', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-posts"
                    onclick="tryItOut('POSTapi-v1-posts');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-posts"
                    onclick="cancelTryOut('POSTapi-v1-posts');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-posts"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/posts</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-posts"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-posts"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="title"                data-endpoint="POSTapi-v1-posts"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>slug</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="slug"                data-endpoint="POSTapi-v1-posts"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-v1-posts"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>category_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="category_id"                data-endpoint="POSTapi-v1-posts"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the categories table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>tag_ids</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="tag_ids[0]"                data-endpoint="POSTapi-v1-posts"
               data-component="body">
        <input type="text" style="display: none"
               name="tag_ids[1]"                data-endpoint="POSTapi-v1-posts"
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-posts-comment">POST api/v1/posts/comment</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-posts-comment">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/posts/comment" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"post_id\": 16,
    \"content\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/posts/comment"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 16,
    "content": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-posts-comment">
</span>
<span id="execution-results-POSTapi-v1-posts-comment" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-posts-comment"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-posts-comment"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-posts-comment" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-posts-comment">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-posts-comment" data-method="POST"
      data-path="api/v1/posts/comment"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-posts-comment', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-posts-comment"
                    onclick="tryItOut('POSTapi-v1-posts-comment');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-posts-comment"
                    onclick="cancelTryOut('POSTapi-v1-posts-comment');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-posts-comment"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/posts/comment</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-posts-comment"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-posts-comment"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-posts-comment"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>post_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="post_id"                data-endpoint="POSTapi-v1-posts-comment"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the posts table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>content</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="content"                data-endpoint="POSTapi-v1-posts-comment"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-v1-posts-like">POST api/v1/posts/like</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-POSTapi-v1-posts-like">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/posts/like" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"post_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/posts/like"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "post_id": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-v1-posts-like">
</span>
<span id="execution-results-POSTapi-v1-posts-like" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-posts-like"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-posts-like"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-posts-like" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-posts-like">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-v1-posts-like" data-method="POST"
      data-path="api/v1/posts/like"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-posts-like', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-posts-like"
                    onclick="tryItOut('POSTapi-v1-posts-like');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-posts-like"
                    onclick="cancelTryOut('POSTapi-v1-posts-like');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-posts-like"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/posts/like</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="POSTapi-v1-posts-like"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-v1-posts-like"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-v1-posts-like"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>post_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="post_id"                data-endpoint="POSTapi-v1-posts-like"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the posts table. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-v1-posts-comments--id-">GET api/v1/posts/comments/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-posts-comments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/posts/comments/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/posts/comments/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-posts-comments--id-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-posts-comments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-posts-comments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-posts-comments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-posts-comments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-posts-comments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-posts-comments--id-" data-method="GET"
      data-path="api/v1/posts/comments/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-posts-comments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-posts-comments--id-"
                    onclick="tryItOut('GETapi-v1-posts-comments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-posts-comments--id-"
                    onclick="cancelTryOut('GETapi-v1-posts-comments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-posts-comments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/posts/comments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-posts-comments--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-posts-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-posts-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-posts-comments--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the comment. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-v1-posts-comments--id-">DELETE api/v1/posts/comments/{id}</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-DELETEapi-v1-posts-comments--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/v1/posts/comments/1" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/posts/comments/1"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-v1-posts-comments--id-">
</span>
<span id="execution-results-DELETEapi-v1-posts-comments--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-v1-posts-comments--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-v1-posts-comments--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-v1-posts-comments--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-v1-posts-comments--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-v1-posts-comments--id-" data-method="DELETE"
      data-path="api/v1/posts/comments/{id}"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-v1-posts-comments--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-v1-posts-comments--id-"
                    onclick="tryItOut('DELETEapi-v1-posts-comments--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-v1-posts-comments--id-"
                    onclick="cancelTryOut('DELETEapi-v1-posts-comments--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-v1-posts-comments--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/v1/posts/comments/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="DELETEapi-v1-posts-comments--id-"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-v1-posts-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-v1-posts-comments--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-v1-posts-comments--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the comment. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-users">GET api/v1/users</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-users">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/users" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/users"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Success&quot;,
    &quot;meta&quot;: null,
    &quot;links&quot;: null,
    &quot;data&quot;: [
        {
            &quot;id&quot;: 69,
            &quot;name&quot;: &quot;Agnes Hodkiewicz&quot;,
            &quot;email&quot;: &quot;georgianna.haley@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 1,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 67,
            &quot;name&quot;: &quot;Prof. Agustin Simonis Jr.&quot;,
            &quot;email&quot;: &quot;garland97@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 1,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 68,
            &quot;name&quot;: &quot;Eddie Haley&quot;,
            &quot;email&quot;: &quot;kamille40@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 1,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 64,
            &quot;name&quot;: &quot;Aletha Corwin DDS&quot;,
            &quot;email&quot;: &quot;stark.alvah@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 65,
            &quot;name&quot;: &quot;Ernie Steuber II&quot;,
            &quot;email&quot;: &quot;ewalker@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 66,
            &quot;name&quot;: &quot;Ada Romaguera&quot;,
            &quot;email&quot;: &quot;estevan.hills@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 63,
            &quot;name&quot;: &quot;Mrs. Ethelyn Becker&quot;,
            &quot;email&quot;: &quot;isabella35@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 62,
            &quot;name&quot;: &quot;Prof. Dee Abshire&quot;,
            &quot;email&quot;: &quot;cory.hauck@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 61,
            &quot;name&quot;: &quot;Prof. Haylie Baumbach III&quot;,
            &quot;email&quot;: &quot;braun.rahul@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 60,
            &quot;name&quot;: &quot;Urban Borer&quot;,
            &quot;email&quot;: &quot;lrath@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 59,
            &quot;name&quot;: &quot;Miss Annabell Kuphal Jr.&quot;,
            &quot;email&quot;: &quot;skye.streich@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 58,
            &quot;name&quot;: &quot;Daryl Swift&quot;,
            &quot;email&quot;: &quot;zschmidt@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 57,
            &quot;name&quot;: &quot;Brody Rutherford&quot;,
            &quot;email&quot;: &quot;linwood.mueller@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 56,
            &quot;name&quot;: &quot;Greyson Stamm DDS&quot;,
            &quot;email&quot;: &quot;jonatan23@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;name&quot;: &quot;Prof. Bernie Kihn&quot;,
            &quot;email&quot;: &quot;deron.hamill@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;name&quot;: &quot;Mrs. Lucienne Kuhn PhD&quot;,
            &quot;email&quot;: &quot;glennie51@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;name&quot;: &quot;Paul Reilly&quot;,
            &quot;email&quot;: &quot;rebecca78@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;name&quot;: &quot;Ettie Abernathy&quot;,
            &quot;email&quot;: &quot;heller.anahi@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 19,
            &quot;name&quot;: &quot;Logan Walter&quot;,
            &quot;email&quot;: &quot;lyda30@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 20,
            &quot;name&quot;: &quot;Reagan Reynolds&quot;,
            &quot;email&quot;: &quot;kihn.emmitt@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 21,
            &quot;name&quot;: &quot;Devante Mann&quot;,
            &quot;email&quot;: &quot;nmacejkovic@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 22,
            &quot;name&quot;: &quot;Prof. Nils Turner Sr.&quot;,
            &quot;email&quot;: &quot;wdenesik@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 23,
            &quot;name&quot;: &quot;Margret Erdman&quot;,
            &quot;email&quot;: &quot;ngrady@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 24,
            &quot;name&quot;: &quot;Jalen Funk&quot;,
            &quot;email&quot;: &quot;delfina.pollich@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 25,
            &quot;name&quot;: &quot;Prof. Devin Wuckert DVM&quot;,
            &quot;email&quot;: &quot;heathcote.delphia@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 26,
            &quot;name&quot;: &quot;Ms. Glenna Larkin MD&quot;,
            &quot;email&quot;: &quot;ocie63@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 27,
            &quot;name&quot;: &quot;Jaylon Cummings&quot;,
            &quot;email&quot;: &quot;xkiehn@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 28,
            &quot;name&quot;: &quot;Prof. Jan Quigley III&quot;,
            &quot;email&quot;: &quot;urutherford@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 29,
            &quot;name&quot;: &quot;Kyla Reinger&quot;,
            &quot;email&quot;: &quot;giovani.lockman@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 30,
            &quot;name&quot;: &quot;Josefa Turner&quot;,
            &quot;email&quot;: &quot;gleichner.alphonso@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 31,
            &quot;name&quot;: &quot;Dewitt Rath MD&quot;,
            &quot;email&quot;: &quot;elisha41@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 32,
            &quot;name&quot;: &quot;Dr. Orval Kozey&quot;,
            &quot;email&quot;: &quot;mariam04@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 33,
            &quot;name&quot;: &quot;Luciano Paucek&quot;,
            &quot;email&quot;: &quot;vandervort.gerhard@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 34,
            &quot;name&quot;: &quot;Taya Powlowski&quot;,
            &quot;email&quot;: &quot;cali42@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;name&quot;: &quot;Verna Rau Jr.&quot;,
            &quot;email&quot;: &quot;tavares.raynor@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 36,
            &quot;name&quot;: &quot;Prof. Myles Okuneva DVM&quot;,
            &quot;email&quot;: &quot;halvorson.helena@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 37,
            &quot;name&quot;: &quot;Mason Denesik&quot;,
            &quot;email&quot;: &quot;marquardt.mercedes@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 38,
            &quot;name&quot;: &quot;Jerald Wolf&quot;,
            &quot;email&quot;: &quot;thurman77@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 39,
            &quot;name&quot;: &quot;Hilda Collins II&quot;,
            &quot;email&quot;: &quot;owatsica@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 40,
            &quot;name&quot;: &quot;Avery Hammes&quot;,
            &quot;email&quot;: &quot;eterry@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 41,
            &quot;name&quot;: &quot;Efren Jacobi&quot;,
            &quot;email&quot;: &quot;jensen.schinner@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 42,
            &quot;name&quot;: &quot;Mr. Omari Stokes I&quot;,
            &quot;email&quot;: &quot;cconn@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 43,
            &quot;name&quot;: &quot;Abraham Schroeder&quot;,
            &quot;email&quot;: &quot;zoie02@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 44,
            &quot;name&quot;: &quot;Annalise Tremblay PhD&quot;,
            &quot;email&quot;: &quot;gleichner.bryon@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 45,
            &quot;name&quot;: &quot;Zander Effertz&quot;,
            &quot;email&quot;: &quot;ukoch@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 46,
            &quot;name&quot;: &quot;Miss Aracely Schmeler III&quot;,
            &quot;email&quot;: &quot;vgreenholt@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 47,
            &quot;name&quot;: &quot;Anabelle Kautzer&quot;,
            &quot;email&quot;: &quot;eduardo.boyle@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 48,
            &quot;name&quot;: &quot;Prof. Deven Morissette I&quot;,
            &quot;email&quot;: &quot;qpacocha@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 49,
            &quot;name&quot;: &quot;Prof. Deondre Kozey DDS&quot;,
            &quot;email&quot;: &quot;gibson.jules@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 50,
            &quot;name&quot;: &quot;Lillian Osinski&quot;,
            &quot;email&quot;: &quot;hjaskolski@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 51,
            &quot;name&quot;: &quot;Prof. Bud Schoen&quot;,
            &quot;email&quot;: &quot;ohara.hailie@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 52,
            &quot;name&quot;: &quot;Kellie Larson&quot;,
            &quot;email&quot;: &quot;vergie65@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 54,
            &quot;name&quot;: &quot;Miss Erna Morissette II&quot;,
            &quot;email&quot;: &quot;taurean11@example.org&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 55,
            &quot;name&quot;: &quot;Deanna Langworth&quot;,
            &quot;email&quot;: &quot;kohler.beryl@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;name&quot;: &quot;Mr. Lucious Rau&quot;,
            &quot;email&quot;: &quot;bswaniawski@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 35,
            &quot;name&quot;: &quot;Alexandrea Kunde&quot;,
            &quot;email&quot;: &quot;gmante@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;name&quot;: &quot;Miss Eleanora Zboncak II&quot;,
            &quot;email&quot;: &quot;foconner@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;name&quot;: &quot;Yasmin Lesch&quot;,
            &quot;email&quot;: &quot;veum.donnell@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;name&quot;: &quot;Prof. Anya Heaney V&quot;,
            &quot;email&quot;: &quot;hauck.reilly@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;name&quot;: &quot;Roy Gerlach&quot;,
            &quot;email&quot;: &quot;stoltenberg.josephine@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;name&quot;: &quot;Prof. Rowan Barrows&quot;,
            &quot;email&quot;: &quot;selmer.marvin@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;name&quot;: &quot;Gregoria Kerluke&quot;,
            &quot;email&quot;: &quot;nklocko@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;name&quot;: &quot;Dr. Raina Corwin Jr.&quot;,
            &quot;email&quot;: &quot;fohara@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 53,
            &quot;name&quot;: &quot;Jamie Shields&quot;,
            &quot;email&quot;: &quot;linda.von@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;name&quot;: &quot;Chesley Haag&quot;,
            &quot;email&quot;: &quot;darius78@example.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 4,
            &quot;name&quot;: &quot;Goran Zoran&quot;,
            &quot;email&quot;: &quot;goranzoran@gmail.com&quot;,
            &quot;avatar&quot;: &quot;storage/images/IMG_1801.jpg&quot;,
            &quot;posts_count&quot;: 15,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/images/IMG_1801.jpg&quot;
        },
        {
            &quot;id&quot;: 3,
            &quot;name&quot;: &quot;b&quot;,
            &quot;email&quot;: &quot;zbailey@example.net&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 2,
            &quot;name&quot;: &quot;Dragana Zdravkovic&quot;,
            &quot;email&quot;: &quot;zdravkovic.dragana@gmail.com&quot;,
            &quot;avatar&quot;: &quot;storage/avatars/avatar.png&quot;,
            &quot;posts_count&quot;: 0,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/avatars/avatar.png&quot;
        },
        {
            &quot;id&quot;: 1,
            &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
            &quot;email&quot;: &quot;zdravkoovic.nikola@gmail.com&quot;,
            &quot;avatar&quot;: &quot;storage/images/DSC_0563.jpg&quot;,
            &quot;posts_count&quot;: 29,
            &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-users" data-method="GET"
      data-path="api/v1/users"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users"
                    onclick="tryItOut('GETapi-v1-users');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users"
                    onclick="cancelTryOut('GETapi-v1-users');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-users"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-users--id-">GET api/v1/users/{id}</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-users--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/users/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/users/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-users--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Success&quot;,
    &quot;meta&quot;: null,
    &quot;links&quot;: null,
    &quot;data&quot;: {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Nikola Zdravkovic&quot;,
        &quot;email&quot;: &quot;zdravkoovic.nikola@gmail.com&quot;,
        &quot;avatar&quot;: &quot;storage/images/DSC_0563.jpg&quot;,
        &quot;posts_count&quot;: 29,
        &quot;avatar_url&quot;: &quot;http://localhost/storage/images/DSC_0563.jpg&quot;
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-users--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-users--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-users--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-users--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-users--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-users--id-" data-method="GET"
      data-path="api/v1/users/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-users--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-users--id-"
                    onclick="tryItOut('GETapi-v1-users--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-users--id-"
                    onclick="cancelTryOut('GETapi-v1-users--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-users--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/users/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-users--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-v1-users--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the user. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-v1-me">GET api/v1/me</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>



<span id="example-requests-GETapi-v1-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/me" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/me"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-me">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-me" data-method="GET"
      data-path="api/v1/me"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-me"
                    onclick="tryItOut('GETapi-v1-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-me"
                    onclick="cancelTryOut('GETapi-v1-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Authorization</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Authorization" class="auth-value"               data-endpoint="GETapi-v1-me"
               value="Bearer {YOUR_AUTH_KEY}"
               data-component="header">
    <br>
<p>Example: <code>Bearer {YOUR_AUTH_KEY}</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-v1-manticore-autocomplete">GET api/v1/manticore/autocomplete</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-manticore-autocomplete">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/manticore/autocomplete?query=react" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/manticore/autocomplete"
);

const params = {
    "query": "react",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-v1-manticore-autocomplete">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
vary: Origin
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;status&quot;: 200,
    &quot;success&quot;: true,
    &quot;message&quot;: &quot;Success&quot;,
    &quot;meta&quot;: null,
    &quot;links&quot;: null,
    &quot;data&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-manticore-autocomplete" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-manticore-autocomplete"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-manticore-autocomplete"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-v1-manticore-autocomplete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-manticore-autocomplete">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-v1-manticore-autocomplete" data-method="GET"
      data-path="api/v1/manticore/autocomplete"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-manticore-autocomplete', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-manticore-autocomplete"
                    onclick="tryItOut('GETapi-v1-manticore-autocomplete');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-manticore-autocomplete"
                    onclick="cancelTryOut('GETapi-v1-manticore-autocomplete');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-manticore-autocomplete"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/manticore/autocomplete</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-v1-manticore-autocomplete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-v1-manticore-autocomplete"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
                                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>query</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
                <input type="text" style="display: none"
                              name="query"                data-endpoint="GETapi-v1-manticore-autocomplete"
               value="react"
               data-component="query">
    <br>
<p>Optional. Searching for blog titles and users nickname. Example: <code>react</code></p>
            </div>
                </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
