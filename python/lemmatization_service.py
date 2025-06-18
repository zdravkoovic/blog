import sys, stanza

stanza.download('sr')
nlp = stanza.Pipeline('sr', processors='tokenize,lemma', use_gpu=False)

text = sys.argv[1] if len(sys.argv) > 1 else "Nema teksta za lematizaciju."
doc = nlp(text)
lemmas = [w.lemma for sent in doc.sentences for w in sent.words]
print(' '.join(lemmas), end='')