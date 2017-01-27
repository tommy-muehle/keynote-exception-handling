# keynote-my-coding-standard-explained

Code snippets for my keynote ["Exception handling - classic and fancy"](https://speakerdeck.com/tommymuehle/exception-handling-classic-and-fancy).

## Requirements

* [highlight](http://www.andre-simon.de/doku/highlight/highlight.php)
* [personal theme](https://github.com/tommy-muehle/my-highlight-theme)

## Usage

```
cat some-slide.php | tail -n +2 > highlight.php | highlight -f -O rtf highlight.php --font-size 28 --style my-personal | pbcopy && rm highlight.php
```
