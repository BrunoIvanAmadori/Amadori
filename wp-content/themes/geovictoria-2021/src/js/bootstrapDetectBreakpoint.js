const bootstrapDetectBreakpoint = function () {
    // cache some values on first call

    let breakpointValues;
    let breakpointNames;

    if (!breakpointValues) {
        breakpointNames = ["xl", "lg", "md", "sm", "xs"];
        breakpointValues = [];
        for (const breakpointName of breakpointNames) {
            breakpointValues[breakpointName] = window.getComputedStyle(document.documentElement).getPropertyValue('--breakpoint-' + breakpointName);
            console.log(document.documentElement);
        }
    }
    let i = breakpointNames.length
    for (const breakpointName of breakpointNames) {
        i--
        if (window.matchMedia("(min-width: " + breakpointValues[breakpointName] + ")").matches) {
            return {name: breakpointName, index: i}
        }
    }
    return null
}

export { bootstrapDetectBreakpoint };