function truncate(string, txtLength) {
    return (string.length > txtLength) ?
        string.slice(0, txtLength - 1) + "..." : string;
}

truncate(document.getElementsByClassName("card-text"), 55);