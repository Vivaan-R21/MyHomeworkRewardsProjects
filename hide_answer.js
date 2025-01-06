var pressed = false;

jQuery(".show-answer").click(function() {
    var target = "#" + jQuery(this).data("target");

    // If the answer is hidden, show it, else hide it
    if (pressed) {
        jQuery(target).slideUp(200);  // Hide the answer
        jQuery(this).html("Show Answer");  // Change button text to "Show Answer"
    } else {
        jQuery(target).slideDown(200);  // Show the answer
        jQuery(this).html("Hide Answer");  // Change button text to "Hide Answer"
    }

    // Toggle the pressed state
    pressed = !pressed;

    // Accessibility: Update the aria-pressed attribute
    jQuery(this).attr('aria-pressed', pressed);

    // Toggle the expanded/collapsed class for styling
    jQuery(this).toggleClass('expanded collapsed');
});
