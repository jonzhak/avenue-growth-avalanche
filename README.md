# Avenue Growth
-no need to do anything about this code here - it's already deployed to https://avenue-growth.vercel.app/
- but you will need to add your keys into this (can send it to Elezhan, he will add)


# iFrame 2 - to show users how their invitations are doing:
```
<iframe 
            sandbox="allow-top-navigation allow-scripts allow-same-origin allow-forms allow-popups" 
            height="500px" 
            width="800px"
            scrolling="no"
            src={`uri`} />


uri = ${AVALANCHE_UI_URL}/table_avenue-growth?email=${email}&token=${authToken}

AVALANCHE_UI_URL = 'https://refer-ui-two.vercel.app/'
email = currentuser@gmail.com
authToken = data you get from getApitoken
```

# What Remains:
1) full systems test (fake data)
-from invite generation to reward fulfillment
2) go live
3) full systems test (live mode)
4) submit your text for emails/whatsapp to be written for share text + email address
optimization
-set goal for views (% of active users)
-set goal for invites, signs ups and premium conversions
-track and optimize placement of dashboards, reward offers, text


