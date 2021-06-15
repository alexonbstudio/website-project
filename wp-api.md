# WP API

{% api-method method="get" host="https://alexonb.studio" path="/api/sites.json" %}
{% api-method-summary %}
Get Sites
{% endapi-method-summary %}

{% api-method-description %}
This endpoint allows you to get free cakes.
{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-query-parameters %}
{% api-method-parameter name="$sites" type="string" required=false %}
domain
{% endapi-method-parameter %}

{% api-method-parameter name="$sites" type="string" required=false %}
name
{% endapi-method-parameter %}
{% endapi-method-query-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

{% tabs %}
{% tab title="Json" %}
```
{
    "name":"AlexonbStudio",
    "domain":"alexonb.studio",
    "auto":{
        "domain":"alexonb.studio"
    },
    "email":{
        "receive":"text"
    },
    "sub-domain":"cdnjs.alexonb.studio",
    "protocol":"https",
    "template":"knight",
    "create":[],
    "update":{
        "rdf":"2021-06-12",
        "xml":{
            "date":"2021-05-27",
            "time":"21:57:00"
        }
    },
    "copyright":{
        "frontend":"Copyright © 2019-2021",
        "rdf":"Copyright ©"
    },
    "head":{
        "robots":"index, follow"
    },
    "crypto":{
        "smart-contract":{
            "bsc":"",
            "eth":""
        }
    },
    "default-timezone":"Europe\/Paris",
    "crypto-market":"1,1027,825,1839,4687,74,3408,2011,3635,4030,6892,2700,2130,1697,2694,2499,4361",
    "tarifs":{
        "tva":"HT",
        "freelancer":{
        "hours":"103.21",
        "days":"2492.55",
        "weeks":"17339.87",
        "months":"75341.73.31",
        "trimestriels":"226025.19",
        "years":"1084920.90"
    },
    ......
}
```
{% endtab %}
{% endtabs %}
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://alexonb.studio" path="/api/social.json" %}
{% api-method-summary %}
Get social
{% endapi-method-summary %}

{% api-method-description %}

{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-query-parameters %}
{% api-method-parameter name="$social" type="string" required=false %}
facebook-&gt;name
{% endapi-method-parameter %}
{% endapi-method-query-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```
{
    "facebook":
    {
            "sites":"facebook",
            "name":"alexonbstudio",
            "url":"https:\/\/fb.me\/alexonbstudio",
            "admins":"103042234555592",
            "profile-id":"100000686899395",
            "app-id":"215266456206074"
    },
    "twitter":{
            "sites":"twitter",
            "name":"alexonbstudio",
            "url":"https:\/\/twitter.com\/alexonbstudio"
    },
    "tiktok":{
            "sites":"tiktok",
            "name":"alexonbstudio",
            "url":"https:\/\/tiktok.com\/@alexonbstudio"
    },
       ......
}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://www.alexonb.studio" path="/api/private.json" %}
{% api-method-summary %}
Get private
{% endapi-method-summary %}

{% api-method-description %}

{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-query-parameters %}
{% api-method-parameter name="$private" type="string" required=false %}
mail-&gt;public
{% endapi-method-parameter %}

{% api-method-parameter name="$private" type="string" required=false %}
name
{% endapi-method-parameter %}
{% endapi-method-query-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```
{
    "born":"24\/04\/1991",
    "name":"Alexon Balangue",
    "address":"****",
    "postal":"75017",
    "city":"Paris",
    "region":"\u00cele-de-France",
    "contry":"France",
    "phone":{
        "code":"+33",
        "normal":"0",
        "number":""
    },
    "mobile":{
        "code":"+33",
        "normal":"0",
        "number":""
    },
    "fax":{
        "code":"+33",
        "normal":"0",
        "number":""
    },
    "mail":{
        "public":"info",
        "private":"alexonbstudio",
        "@":{
            "external":"protonmail.com"
        }
    }
}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}



{% api-method method="get" host="https://www.alexonb.studio" path="/api/business.json" %}
{% api-method-summary %}
Get business
{% endapi-method-summary %}

{% api-method-description %}

{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-query-parameters %}
{% api-method-parameter name="$business" type="string" required=false %}
local-&gt;vat
{% endapi-method-parameter %}

{% api-method-parameter name="$business" type="string" required=false %}
local-&gt;name
{% endapi-method-parameter %}
{% endapi-method-query-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```
{
    "local":{
        "born":"",
        "name":"",
        "siret":"PENDING",
        "tva":"PENDING",
        "vat":"PENDING",
        "address":"PENDING",
        "postal":"PENDING",
        "city":"Paris",
        "region":"Ile-de-France",
        "contry":"France",
        "status":"PENDING",
        "geo":{
            "latitude":"",
            "longitude":""
        },
        "mobile":{
            "code":"+33",
            "normal":"0",
            "number":""
        },
        .....
    }
}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://www.alexonb.studio" path="/api/images.json" %}
{% api-method-summary %}
Get images
{% endapi-method-summary %}

{% api-method-description %}

{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-query-parameters %}
{% api-method-parameter name="$images" type="string" required=false %}
manager-&gt;crypto-&gt;scan-&gt;eth
{% endapi-method-parameter %}

{% api-method-parameter name="$images" type="string" required=false %}
dir
{% endapi-method-parameter %}
{% endapi-method-query-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```
{
    "manager":{
        "crypto":{
            "wallet":{
                "trust":"crypto\/trust-wallet.png",
                "meta":"crypto\/metamask.png"
            },
            "scan":{
                "eth":"crypto\/ethscan.png",
                "bsc":"crypto\/bscscan.png"
            }
        },
        .....
    },
    "dir":"images"
}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://www.alexonb.studio" path="/api/partner.json" %}
{% api-method-summary %}
Get partner
{% endapi-method-summary %}

{% api-method-description %}

{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-query-parameters %}
{% api-method-parameter name="$partner" type="string" required=false %}
planethoster-&gt;sites
{% endapi-method-parameter %}

{% api-method-parameter name="$partner" type="string" required=false %}
planethoster-&gt;name
{% endapi-method-parameter %}
{% endapi-method-query-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```
{
    "planethoster":{
        "name":"PlanetHoster",
        "url":"www.planethoster.com\/goph-af81b6dedd8f43f",
        "code":"PHA-alexonbstudio",
        "sites":"planethoster.com"
    },
    ....
}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://www.alexonb.studio" path="/api/sponsor.json" %}
{% api-method-summary %}
Get sponsor
{% endapi-method-summary %}

{% api-method-description %}

{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-query-parameters %}
{% api-method-parameter name="$sponsor" type="string" required=false %}
exemple-&gt;name
{% endapi-method-parameter %}
{% endapi-method-query-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```
{
    "exemple":{
        "name":"",
        "url":""
    }
}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

{% api-method method="get" host="https://www.alexonb.studio" path="/api/credits.json" %}
{% api-method-summary %}
Get credits
{% endapi-method-summary %}

{% api-method-description %}

{% endapi-method-description %}

{% api-method-spec %}
{% api-method-request %}
{% api-method-query-parameters %}
{% api-method-parameter name="$credits" type="string" required=false %}
developper-&gt;alexonbstudio-&gt;name
{% endapi-method-parameter %}
{% endapi-method-query-parameters %}
{% endapi-method-request %}

{% api-method-response %}
{% api-method-response-example httpCode=200 %}
{% api-method-response-example-description %}

{% endapi-method-response-example-description %}

```
{
    "developper":{
        "alexonbstudio":{
            "name":"AlexonbStudio",
            "url":"alexonb.studio"
        },
        "PHPMailer":{
            "name":"PHPMailer",
            "url":"github.com\/PHPMailer\/PHPMailer"
        },
        ....
    }
}
```
{% endapi-method-response-example %}
{% endapi-method-response %}
{% endapi-method-spec %}
{% endapi-method %}

