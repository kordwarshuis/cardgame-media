Be aware that replacing an image means that the various Social Media images need to be refreshed in the caches of Twitter, Facebook, etc. Only then will the new image be visible.

See instruction {elsewhere Soc Media Refresh instruction}.

### System directory (plus backup)
For every misconception we have at least three files: 

```{unique-url-tail}.jpg```
```{unique-url-tail}-text.jpg```
```{unique-url-tail}-text-bckgrd.jpg```

For example
```
money-laundering.jpg    Current 
money-laundering-text.jpg   Current
money-laundering-text-bckgrd.jpg Contains with text of misco in the image
```

```{unique-url-tail}.jpg```
and
```{unique-url-tail}-text.jpg```


The first is used by the cardgame system for twitter. The tweet text contains the message with the misconception; the image will support this message.\
The latter is for stand-alone use, and contains the text of the misconception burnt into the image. Two question marks (questioning the validity of the statement) will be added, so the image becomes self-explanatory as a whole.

#### Process automation

Create a placeholder imagefile with the text of the new misconception burnt into the image. This file is called ```money-laundering-text-bckgrd.jpg```.\
We start with a placeholder file called 'bckgrd' for **Current**, that contains a logo and *the text of the misconception* for the time being that there is no illustration available. This file is ```{unique-url-tail}-text.jpg```.\
Because we also need an image to be able to print to text of the misconception runtime above the image we do the following:
 - Copy the root-image of this cardstack (e.g. Bitcoin) into ```{unique-url-tail}.jpg```
 - Check that there are exactly three files in the system directory per card:
     1. money-laundering.jpg    Current 
     2. money-laundering-text.jpg   Current
     3. money-laundering-text-bckgrd.jpg Contains with text of misco in the image