//Code to create and display adverts
//Wordpress variables come as an 'injectedVars' object


    var targetingData = {};
    var targetingTags = [];
    var deviceSize = "";

    var screenMedium = 728;
    var screenLarge = 1024;

    //If page is a single post, parse the tags
    if(injectedVars.isPost){
        injectedVars.tags.forEach(function(tag){
            targetingTags.push(tag.name);
        });
    }

    // set device size value based on screen width
    var currentWidth = window.innerWidth;

    if(currentWidth < screenMedium){
        deviceSize = "small";
    } else if(currentWidth > screenMedium && currentWidth < screenLarge){
        deviceSize = "medium";
    } else {
        deviceSize = "large";
    }



    //Log targeting hooks to the console
    targetingData.deviceSize = deviceSize;
    targetingData.baseAdUnit = injectedVars.baseUnit;
    targetingData.specificUnit = injectedVars.requestPath;
    targetingData.fullAdUnit = injectedVars.baseUnit +  "/" + injectedVars.requestPath;
    targetingData.slug = injectedVars.pageName;
    targetingData.tags = targetingTags.join(', ');
    
    console.log("Targeting hooks for ad requests:");
    console.table(targetingData);


