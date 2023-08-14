# Hubcap
Hubcap is an autonomous AI agent in 25 lines of code: a small Autobot that you can't trust

## What is it?

Hubcap is a commandline tool. It takes a goal from the user, then uses OpenAI's GPT to work out how to complete it.
It keeps going autonomously until the goal is completed.

Hubcap is desigend to be as minimal as possible yet get reasonable results. It works but it's little more than a demo.
There's lots that could be done to improve it but a better use of time would be using a more comprehensive
autonomous agent.

As the code is so simple, it serves as a quick intro to how autonomous agents work and how to interact with LLMs.

## Installation

    pip install llm
    llm keys set openai

## Usage

`php hubcap.php <prompt>`

## Examples

Fix bugs

    php hubcap.php "factorial.py is broken. take a look and fix it for me"

Process files

    php hubcap.php "use ffmpeg to downscale all the videos in the current dir"

Do all your work for you

    # requires GPT-5
    
    php hubcap.php "use the jira cli to fetch all my tasks. work through them in priority order until they're all done."

<img width="1301" alt="fixing python script" src="https://github.com/dave1010/hubcap/assets/50682/1e6a535f-a03f-4e2f-9cb1-d23b412efeca">



## Security

**Hubcap will run whatever commands that GPT gives it! You must keep your eye on what it's doing at all times.**

Fortunately, it shows the command, then waits 3 seconds before executing it. So you can easily stop it if you notice it doing something it shouldn't.

It may get stuck in a loop and use up your OpenAI credit. Set a budget!

## Why "Hubcap"?

> _Everybody likes Hubcap. He's friendly, always has a clever joke or compliment ready, and is generally a nice, fun, affable bot to be around. On the other hand, nobody actually trusts Hubcap. It's not his devotion to the Autobot cause that's the concern (mostly), but his ulterior motives for his friendship and jokes and the like. He is at his core a con artist, and everyone's a bit on their guard around him. Some think he's this way to cover for deficiencies or to stay in a position well above his actual aptitude level... or maybe he just likes tricking people. He doesn't seem to have made many enemies with his tricks and scams, though; quite the opposite. So perhaps it is all mostly harmless._
> https://tfwiki.net/wiki/Hubcap_(G1)
> 
> ![Hubcap](https://github.com/dave1010/hubcap/assets/50682/ce83ca64-1236-45b8-9725-523a864b030a)

## Licence

MIT Licence

(c) 2023 Dave Hulbert
