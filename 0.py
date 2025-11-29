import whois
import sys
if __name__ == '__main__':
    q = sys.argv[1]
    r = whois.whois(q).org
    print(r==None)
