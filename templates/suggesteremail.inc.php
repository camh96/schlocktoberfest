<?php
    
$emailHeaders = [
    'from' =>       'Schlocktoberfest <mailgun@' . $domain . '>',
    'to' =>       '<' . $email . '>',
    'subject' =>  'Thanks for suggesting ' . $title
];

?>
Hi there,

Thank you so much for your kind suggestion that we show "<?= $title ?>" at Schlocktoberfest. We'll be releasing the schedule in the coming months.

<?php if ($newsletter): ?>
Thank you also for signing up to our email newsletter. You'll get your first copy within a fortnight.
<?php endif; ?>

Thanks again,

The Schlockpickers
Schlocktoberfest